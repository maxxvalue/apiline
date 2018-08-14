<?php
require('calculate.php');
?>
<head>
  <title>poke</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	td {
		border: 1px solid black;
		text-align:left;
		padding: 0px 5px;
	}
</style>
<script>
	$(document).ready(function() {
		$('button').each(function() {
			$(this).click(function() {
				var id = $(this).attr('id');
				$("form[id=id]").submit();
			});
		});
		$("#search").click(function() {
			$(this).select();
		});
		$("#refresh").click(function() {
			$("input[name='search']").val('');
			location.reload();
		});
	});
</script>
<body>
	<?php
	if ($_POST['search']) {
		$search = $_POST['search'];
		$search = str_replace(' ', '', $search);
		$search = json_encode($search);
		$searchLengthBefore = strlen($search);
		$search = substr($search, 1, $searchLengthBefore-2);
		$searchLength = strlen($search);
	}
	$sql = "SELECT id, lineId, name, net FROM poke WHERE id>1";
	$result = $con->query($sql);
	$searchRenders = [];
	$localRow = [];
	while ($row = $result->fetch_assoc()) {
		$localRow[] = $row;
		$money += $row['net'];
	}
	?>
	<h2>
		<form action="" method="post">
			<span>ค้นหา </span>
			<input type='text' id='search' name='search' placeholder="search" value="<?php echo json_decode("\"$search\"", 1);?>">
			<button onclick="submit();"><icon class='fa fa-search'></icon></button>
			<button><icon id='refresh' class='fa fa-refresh'></icon></button>
		</form>
	</h2>
	<table width="600" border="1">
 		<tr>
		    <th width="70"> <div align="center">User ID</div></th>
		    <th width="70"> <div align="center">Name</div></th>
		    <th width="70"> <div align="center">รวม <?php echo $money; ?></div></th>
		    <th width="70"> <div align="center">Quantity</div></th>
		    <th width="70"> <div align="center">Bonus</div></th>
		    <th width="70"> <div align="center">Confirm</div></th>
		    <th width="70"> <div align="center">Fixed</div></th>
		</tr>
		<tr>
			<td>1</td><td> </td><td></td><td></td><td></td><td></td><td></td>
		</tr>
		<?php
		foreach ($localRow as $row):
			if ($_POST['search']) {
				$nameLength = strlen($row['name']);
				$name = str_replace(' ', '', $row['name']);
				for ($i=0; $i<=($nameLength-$searchLength); $i++) {
					$searchPart = substr($name, $i, $searchLength);
					if (!in_array('\\', str_split($search)) && $searchPart[0] == '\\') {
						$i += 5;
						continue;
					}
					if (strcasecmp($search, $searchPart) == 0) {
						$searchRenders[] = $row['id'];
						break;
					}
				}
				if (!in_array($row['id'], $searchRenders)) continue;
			}
		?>
		<tr>
			<form action="calculate.php" method="post" id='<?php echo $row['id']; ?>'>
				<?php foreach ($row as $n => $v): ?>
				<?php if ($n == 'lineId') continue; ?>
				<?php
					if ($n == 'name') {
						$v = json_decode($v, 1);
						$style = 'style = "min-width: 200px;"';
					}
					else {
						$style = '';
					}
				?>
				<td <?php echo $style; ?>><?php echo $v; ?></td>
				<?php endforeach; ?>
				<td style="padding: 0;"><input name='money' type='text' size='10'></td>
				<td style="padding: 0;"><input name='bonus' type='text' size='5'></td>
				<td style="padding: 0;"><button name='submit' class="btn btn-outline-danger btn-lg"  id='<?php echo $row['id']; ?>' value='1'>ตกลง</button></td>
				<td style="padding: 0;"><button name="fix" class="btn btn-outline-danger btn-lg" id="<?php echo $row['id']; ?>" value='1'>แก้ไข</button></td>
				<input type="hidden" name="lineId" value="<?php echo $row['lineId']; ?>">
				<input type="hidden" name="name" value='<?php echo str_replace("'", "&apos;", $row['name']); ?>'>
				<input type="hidden" name="net" value="<?php echo $row['net']; ?>">
			</form>
		</tr>
		<?php endforeach; ?>
	</table>
</body>