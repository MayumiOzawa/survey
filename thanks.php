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


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>
	<body>
		<?php
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];
		$goiken = $_POST['goiken'];

		$nickname = htmlspecialchars($nickname);
		$email = htmlspecialchars($email);
		$goiken = htmlspecialchars($goiken);

		echo $nickname;
		echo '様<br />';
		echo 'ご意見ありがとうございました<br />';
		echo '頂いたご意見『';
		echo $goiken;
		echo '』<br />';
		echo $email;
		echo 'にメールを送りましたのでご確認ください。';

		//2.SQLで指令をだす
		//.=で繋げることが出来る。一度変数に値を入れて、それをまた繋ぎたい場合などに使える。
		$sql = 'INSERT INTO anketo (nickname,email,goiken)VALUES("';
		$sql .=	$nickname.'","'.$email.'","'.$goiken.'")';

		// echo $sql;
		$stmt = $dbh->prepare($sql);

		$stmt->execute();

		//3.データベースから切断する
		//必須！切断しないとメモリが解放できず、サーバーが重くなる原因になる。
		$dbh=null;
}
catch(exception $e)
{

	echo 'ただいま障害が発生しております。ご不便をお掛けし申し訳ありません';
}	

		?>

	</body>
</html>