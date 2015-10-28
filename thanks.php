	<?php
        try
        {	
        	$dsn='mysql:dbname=phpkiso;host=localhost';
        	$user='root';
        	$password='';
        	$dbh=new PDO($dsn,$user,$password);
        	$dbh->query('SET NAMES utf8');
    ?>

<!DOCTYPE HTML PUBLIC " -//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <herd>
    	<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
    </herd>
    <title>PHP基礎</title>
	<body>
	<?php
            // check.phpからpost（入力されたデータを貰う役割が$_POST）送信されたデータを受け取る。
            // $_POSTはスーパーグローバル変数という。
            // $nicknameは取ってきたデータを１つ１つ代入してる。
            $nickname=$_POST['nickname'];
            $email=$_POST['email'];
            $goiken=$_POST['goiken'];

            // イタズラされないように消毒している。
            $nickname=htmlspecialchars($nickname);
            $email=htmlspecialchars($email);
            $goiken=htmlspecialchars($goiken);

            //INSERT INTOとは SQL文の事言う。
            //SQL文は何種類かあり用途によって書き方が変わる！
            //データをデータベースに保存したい場合は INSERT INTO　を使う。
            //INSERT INTO の後にテーブル名が入る（anketo）
            //anketoの次にカラム名＝今回はnickname,email,goiken。
            //VALUESの中には POST送信で受け取ったデータが入っている。※重要＝左右の順番を間違わない事。
            $sql='INSERT INTO anketo(nickname,email,goiken)VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
            //echo $sql;
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            //3.データベースから切断する
            $dbh=null;

            echo 'ありがとうございました。';
        }
        catch(exception $e)
        {
            echo 'ただいま障害が発生しております。ご不便をお掛けし申し訳ございません';
        }
?>

	</body>
</html>