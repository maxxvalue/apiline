<?php
date_default_timezone_set('Asia/Bangkok');
$host = '118.27.37.140:3306';
$user = 'root';
$pass = 'Pfsense@123';
$database = 'ratchaphruek';
$con = new mysqli($host, $user, $pass, $database);
mysqli_set_charset($con, "utf8");

$access_token = 'E59LsP4Qyl9C7k4ndzuHaZHBhtXbbXFkV0bcbQntePoucQvo2s+Z25zHbHjqKmx4kImxIv/6VHV1hVxPLmyRGNAyFGUqp3Ag/6VMM74Y4ndtc3FG09EJHTT3jesHlLHmbLlegNIav/FWweB2zx0MAgdB04t89/1O/w1cDnyilFU=';

$reportRoom = 'Ccd2f0725024162cd58d8c6133fd19183';

$playRoom = 'C00b074c37c6fb1b6634f96d73e806260';

//ล้าง money
function resetMoney() {
	global $con;
	$table = 'money';

	$sql = "DROP TABLE $table";
	$con->query($sql);

	$sql = "CREATE TABLE $table (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	lineId VARCHAR(255),
	net INT
	)";
	if (!$con->query($sql)){
		echo $con->error;
	}
}

//ล้าง database
function resetPoke() {
	global $con;
	$table = 'poke';

	$sql = "DROP TABLE $table";
	$con->query($sql);

	$sql = "CREATE TABLE $table (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	lineId VARCHAR(255),
	admin VARCHAR(255),
	content VARCHAR(255),
	net INT
	)";
	if (!$con->query($sql)){
		echo $con->error;
	}

	$data = [
		'status'=>'down',
		'game'=>0,
		'bigLap'=>1,
		'lap'=>1,
		'result'=>'',
		'player'=>'4',
		'min'=>'20',
		'max'=>'200',
		'muti'=>'yes',
		'reply'=>'yes'
	];
	$data = json_encode($data);

	$sql = "INSERT INTO $table (name, lineId, content)
	VALUES ('\"index\"', 'index', '$data')";
	if (!$con->query($sql)){
		echo $con->error;
	}
}

//ล้าง report
function resetReport($table) {
	global $con;
	$table = 'report'.ucfirst($table);

	$sql = "DROP TABLE $table";
	$con->query($sql);

	$sql = "CREATE TABLE $table (
	game VARCHAR(255),
	bigLap VARCHAR(255),
	lap VARCHAR(255),
	income VARCHAR(255),
	outcome VARCHAR(255),
	deposite VARCHAR(255),
	withdraw VARCHAR(255),
	bonus VARCHAR(255),
	fix VARCHAR(255)
	)";
	if (!$con->query($sql)){
		echo $con->error;
	}
}

//ล้าง AllReport
function resetAllReport($table) {
	global $con;
	$table = 'reportAll'.ucfirst($table);

	$sql = "DROP TABLE $table";
	$con->query($sql);

	$sql = "CREATE TABLE $table (
	day VARCHAR(255),
	week VARCHAR(255),
	month VARCHAR(255),
	year VARCHAR(255),
	deposite VARCHAR(255),
	withdraw VARCHAR(255),
	conclude VARCHAR(255),
	fix VARCHAR(255)
	)";
	if (!$con->query($sql)){
		echo $con->error;
	}
}

//รับค่าจาก database
function select($table, $column, $key, $value) {
	global $con;
	$sql = "SELECT $column AS reply FROM $table WHERE $key='$value'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['reply'];
}

//ส่งค่าไป database
function update($table, $column, $text, $key, $value) {
	global $con;
	$sql = "UPDATE $table SET $column = '$text' WHERE $key = '$value'";
	if (!$con->query($sql)){
		echo $con->error;
		$return = false;
	}
	else {
		$return = true;
	}
	return $return;
}

//ทำให้ชื่อใส่ใน db ได้
function codeName($text){
	$text = json_encode($text);
	$reply = str_replace('\\', '\\\\', $text);
	$reply = str_replace("'","\\'", $reply);
	return $reply;
}

//ใส่ข้อมูลใน db
function insert($table, $name, $lineId, $net=0) {
	global $con;
	$sql = "INSERT INTO $table (name, lineId, net) VALUES ('$name', '$lineId', $net)";
	if (!$con->query($sql)){
		echo $con->error;
	}
}

//รับค่า id
function getId($table, $lineId) {
	global $con;
	$sql = "SELECT id, lineId FROM $table WHERE lineId = '$lineId'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	if ($row['lineId']) {
		$return = $row['id'];
	}
	else {
		$return = 0;
	}
	return $return;
}

//check การแทง
function check($id, $player, $muti) {
	global $con;
	$sql = "SELECT content, net FROM poke WHERE id = $id";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$content = json_decode($row['content'], 1);
	if ($muti == 'yes') {
		$suffix = ($content['muti'] == 'yes') ? '✔️' : '❌';
	}
	$reply = '';
	for ($i=1; $i<=$player; $i++) { 
		if ($content[$i] != '') {
			$reply .= " $i=" . $content[$i];
		}
	}
	if ($reply != ''){
		$reply = "แทง$reply 💰 ".$row['net']." $suffix";
		return $reply;
	}
}

//checkall
function checkAll($player, $muti) {
	global $con;
	$sql = "SELECT name, content, net FROM poke WHERE id > 1";
	$result = $con->query($sql);
	while ($row = $result->fetch_assoc()) {
		$reply = '';
		$content = json_decode($row['content'], 1);
		$name = json_decode($row['name'], 1);
		if ($muti == 'yes') {
			$suffix = ($content['muti'] == 'yes') ? '✔️' : '❌';
		}
		for ($i=1; $i<=$player; $i++) {
			if ($content[$i] != '') {
				$reply .= " $i=" . $content[$i];
			}
		}
		if ($reply != ''){
		$report .= "\r\n$name แทง$reply 💰 ".$row['net']." $suffix";
		}
	}
	return $report;
}

//สรุป
function result() {
	global $con;
	$player_muti = [];
	$player_value = [];
	$reply = '';
	$income = 0;
	$outcome = 0;
	$data = select('poke', 'content', 'id', 1);
	$data = json_decode($data, 1);
	$sql = "SELECT name, lineId, content, net FROM poke WHERE id > 1";
	$result = $con->query($sql);
	$host_value = substr($data['result'][0], 1);
	while ($row = $result->fetch_assoc()) {
		$content = json_decode($row['content'], 1);
		$check = '';
		foreach ($content as $key => $value) {
			if($key == 'muti') {
				continue;
			}
			$check .= $value;
		}
		if ($check == '') {
			continue;
		}
		$money = 0;
		$reply .= "\r\n" . json_decode($row['name'], 1);
		for($i=1; $i <= $data['player']; $i++) {
			if ($content['muti'] == 'no') {
				$host_muti = 1;
				$player_muti = 1;
			}
			else {
				$host_muti = $data['result'][0][0];
				$player_muti = $data['result'][$i][0];
			}
			$player_value = substr($data['result'][$i], 1);
			if ($content[$i] != 0) {
				if ($player_value > $host_value) {
					$money += $content[$i] * $player_muti;
					$outcome += $content[$i] * $player_muti;
				}
				else if ($player_value < $host_value) {
					$money -= $content[$i] * $host_muti;
					$income += $content[$i] * $host_muti;
				}
			}
		}
		$net = $row['net']+$money;
		if ($money > 0) {
			$reply .= " +$money=$net";
		}
		else if ($money == 0) {
			$reply .= " +0=$net";
		}
		else {
			$reply .= " $money=$net";
		}
		$replyContent = json_encode(array('muti' => $content['muti']));
		if (!$con->query("UPDATE poke SET content='$replyContent', net='$net' WHERE lineId='".$row['lineId']."'")) {
			echo $con->error;
		}
		update('money', 'net', $net, 'lineId', $row['lineId']);
	}
	report('reportPoke', $data['game'], $data['bigLap'], $data['lap'], ['income'=>$income, 'outcome'=>$outcome]);
	$reply = "สรุปรอบย่อยที่ #" . $data['lap'] . $reply;
	return $reply;
}

//ส่งเฉพาะที่
function send($access_token, $destination, $message) {
	global $con;
	//สร้างข้อความตอบกลับ
	$messages = [
		[
		'type' => 'text',
		'text' => $message
		]
	];
	$url = "https://api.line.me/v2/bot/message/push";
	$data = [
		'to' => $destination,
		'messages' => $messages,
	];
	$post = json_encode($data);
	$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_exec($ch);
	curl_close($ch);
}

//เก็บข้อมูล
function report($table, $game, $bigLap, $lap, $arrays) {
	global $con;
	$insertField = $insertValue = '';
	foreach ($arrays as $field => $value) {
		if ($insertField == '') {
			$insertField = $field;
		}
		else {
			$insertField .= ", $field";
		}
		if ($insertValue == '') {
			$insertValue = "'$value'";
		}
		else {
			$insertValue .= ", '$value'";
		}
	}
	$sql = "INSERT INTO $table (game, bigLap, lap, $insertField)
	VALUES ('$game', '$bigLap', '$lap', $insertValue)";
	if (!$con->query($sql)) {
		echo $con->error;
		$return = false;
	}
	else {
		$return = true;
	}
	return $return;
}

//เก็บข้อมูลรายวัน
function reportAll($table, $day, $week, $month, $year, $conclude, $deposite, $withdraw, $fix) {
	global $con;
	$sql = "INSERT INTO $table (day, week, month, year, conclude, deposite, withdraw, $fix)
	VALUES ('$day', '$week', '$month', '$year', '$conclude', '$deposite', '$withdraw', '$fix')";
	if (!$con->query($sql)) {
		echo $con->error;
		$return = false;
	}
	else {
		$return = true;
	}
	return $return;
}

//resultRest
function resultRest($game, $bigLap) {
	global $con;
	$sql = "SELECT income, outcome, deposite, withdraw, bonus, fix FROM reportPoke WHERE game='$game' AND bigLap='$bigLap'";
	$result = $con->query($sql);
	$income = $outcome = $deposite = $withdraw = $bonus = $fix = 0;
	while ($row = $result->fetch_assoc()) {
		$income += $row['income'];
		$outcome += $row['outcome'];
		$deposite += $row['deposite'];
		$withdraw += $row['withdraw'];
		$bonus += $row['bonus'];
		$fix += $row['fix'];
	}
	$res = $income - $outcome;
	$res = ($res>0) ? "+$res" : $res ;

	$reply = "-------------------------";
	$reply .= "\r\nสรุปรอบที่ #{$game}-{$bigLap}";
	$reply .= "\r\nเจ้ารับ = $income";
	$reply .= "\r\nเจ้าจ่าย = $outcome";
	$reply .= "\r\nผลลัพธ์ = $res";
	$reply .= "\r\nฝาก = $deposite";
	$reply .= "\r\nโบนัส = $bonus";
	$reply .= "\r\nถอน = $withdraw";
	$reply .= "\r\nแก้ไขยอด = $fix";
	$reply .= "\r\n-------------------------";
	return $reply;
}

//resultClose
function resultClose($game) {
	global $con;
	$sql = "SELECT income, outcome, deposite, withdraw, bonus, fix FROM reportPoke WHERE game='$game'";
	$result = $con->query($sql);
	$income = $outcome = $deposite = $withdraw = $bonus = $fix = 0;
	while ($row = $result->fetch_assoc()) {
		$income += $row['income'];
		$outcome += $row['outcome'];
		$deposite += $row['deposite'];
		$withdraw += $row['withdraw'];
		$bonus += $row['bonus'];
		$fix += $row['fix'];
	}
	$res = $income - $outcome;
	$res = ($res>0) ? "+$res" : $res ;

	$profit = $deposite - $withdraw;
	$bot = ($profit>0) ? $profit*5/100 : 0 ;
	$profit = ($profit>0) ? $profit : "(".substr($profit, 1).")";

	$reply = "-------------------------";
	$reply .= "\r\nสรุปเกมที่ #{$game}";
	$reply .= "\r\nเจ้ารับ = $income";
	$reply .= "\r\nเจ้าจ่าย = $outcome";
	$reply .= "\r\nผลลัพธ์ = $res";
	$reply .= "\r\nฝาก = $deposite";
	$reply .= "\r\nถอน = $withdraw";
	$reply .= "\r\nโบนัส = $bonus";
	$reply .= "\r\nบอท5% = $bot";
	$reply .= "\r\nกำไร/ขาดทุน = $profit";
	$reply .= "\r\nแก้ไขยอด = $fix";
	$reply .= "\r\n-------------------------";

	$day = date('j');
	$week = date('W');
	$month = date('n');
	$year = date('Y') + 543;
	reportAll('reportAllPoke', $day, $week, $month, $year, $profit, $deposite, $withdraw, $fix);
	return $reply;
}