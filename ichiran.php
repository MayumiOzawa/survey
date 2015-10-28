<?php
try{

//1.データベースに接続する
//同じ環境で動いているのであれば、host=localhostでOK
//XAMPPでつなぐ場合は、$userは'root'がお決まり
//$dsn = データ接続文字列
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM `anketo` WHERE 1';

$stmt = $dbh->prepare($sql);
$stmt->execute();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>
	<body>
		<?php 
		While(1)
		{
			$rec = $stmt->fetch(PDO::FETCH_ASSOC);
			if($rec==false)
			{
				//処理を中止する
				break;
			}

			//連想配列の形で1行分のデータを取得
			//keyはカラム名
			echo $rec['code'];
			echo $rec['nickname'];
			echo $rec['email'];
			echo $rec['goiken'];
			echo '<br />';
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