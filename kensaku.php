<?php
try{

$code = $_POST['code'];
$code = htmlspecialchars($code);

$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM `anketo` WHERE code='.$code;

$stmt = $dbh->prepare($sql);
$stmt->execute();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>

		<!-- Bootstrap core CSS -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet">
	    <link href="assets/css/main.css" rel="stylesheet">

	</head>
	<body>
		<?php
			$rec = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($rec!=null)
			{
		?>		
				<div class="container">

				<!-- Table -->
				<table class="table">
				<thead>
					<tr>
						<th>code</th>
						<th>nickname</th>
						<th>email</th>
						<th>goiken</th>	
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $rec['code']; ?></td>
						<td><?php echo $rec['nickname'] ?></td>
						<td><?php echo $rec['email'] ?></td>
						<td><?php echo $rec['goiken']?></td>
						<td> '<br />'</td>
					</tr>
				</tbody>
				</table>
				</div>
				</div>
				</div>
				</div>
			<?php
			}
			else
			{
				echo 'ご意見コードが入力されていないか、検索結果がありません。';
			}

			$dbh = null;

		?>

	</body>
</html>

<?php
}
catch(exception $e)
{

	echo 'エラーが発生しました';
}	
?>