<?php
require_once __DIR__.'/function.php';

if ($_POST['money']) {
	$data = select('poke', 'content', 'id', 1);
	$data = json_decode($data, 1);
	if (in_array($data['status'], ['close', 'open'])) {
		$lineId = $_POST['lineId'];
		$money = $_POST['money'];
		if ($_POST['bonus'] != '') {
			$bonus = $_POST['bonus'];
			$bonusMoney = number_format($money*$bonus/100, 0, '.', '');
			$bonusText = "โบนัส+$bonusMoney ";
		}
		$name = json_decode($_POST['name'], 1);
		$net = $_POST['net'] + $money + $bonusMoney;
		update('poke', 'net', $net, 'lineId', $lineId);
		update('money', 'net', $net, 'lineId', $lineId);
		if ($money<0) {
			$money = substr($money, 1);
			$preWord = 'ลด';
			$operator = '-';
			$tablePath = 'withdraw';
		}
		else {
			$money = ($money[0] == '+') ? substr($money, 1) : $money;
			$preWord = 'เพิ่ม';
			$operator = '+';
			$tablePath = 'deposite';
		}
		if ($_POST['submit']) {
			report('reportPoke', $data['game'], $data['bigLap'], $data['lap'], [$tablePath=>$money, 'bonus'=>$bonusMoney]);
			$replyText = "{$preWord}เครดิต {$name} {$operator}{$money} $bonusText= $net";
		}
		else if ($_POST['fix']) {
			report('reportPoke', $data['game'], $data['bigLap'], $data['lap'], ['fix'=>"{$operator}{$money}"]);
			$replyText = "แก้ไขเครดิต {$name} {$operator}{$money} $bonusText= $net";
		}
		send($access_token, $playRoom, $replyText);
	}
	else {
		send($access_token, $playRoom, 'ยังไม่ถึงรอบการเติมเงิน/ถอนเงิน');
	}
}
if (isset($_POST['money'])) {
	echo "
	<script>
		window.location = '../photong/panel.php';
	</script>
	";
}