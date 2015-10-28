 <!DOCTYPE HTML PUBLIC " -//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
        <title>PHP基礎</title>
    </head>
    <body>
        <?php
        // index.htmlからpost（入力されたデータを貰う役割が$_POST）送信されたデータを受け取る。
        // $_POSTはスーパーグローバル変数という。
        // $nicknameは取ってきたデータを１つ１つ代入してる。
            $nickname=$_POST['nickname'];
            $email=$_POST['email'];
            $goiken=$_POST['goiken'];

            // イタズラされないように消毒している。　　　　　　　 
            $nickname=htmlspecialchars($nickname);
            $email=htmlspecialchars($email);
            $goiken=htmlspecialchars($goiken);


            //パターン１
            if($nickname==''){
                print'ニックネームが入力されていません。<br/>';
            }else if($nickname == 'エロ' || $nickname == 'ero'){
                print 'エロは使えません。<br/>';
            }else{ 
                print 'ようこそ';
                print $nickname;
                print '様';
                print '<br/>';
            }
            //パターン２
            // if($nickname==''){
            //     print'ニックネームが入力されていません。<br/>';
            // }else if($nickname == 'エロ'){
            //     print 'エロは使えません。<br/>';
            // }else if($nickname == 'ero'){
            //     print'eroは使えません。<br/>';
            // }else{ 
            //     print 'ようこそ';
            //     print $nickname;
            //     print '様';
            //     print '<br/>';
            // }

            if($email==''){
                print'メールアドレスが入力させていません。<br/>';
            }else{
                print'メールアドレス:';
                print $email;
                print '<br/>';
            }

            if($goiken==''){
                print'ご意見が入力されていません。<br/>';
            }else{
                print' ご意見『';
                print $goiken;
                print '』<br/>';
            }

            // もしニックネームが空だったら、又はemailが空だったら、又はgoikenが空だったら登録できないようにしている。
            // だから"value="戻る">'しか表示できない。
             if($nickname == '' || $email == '' ||$goiken == ''){
                 echo "string";'<form>';
                 echo'<input type="button"onclick="history.back()"value="戻る">';
                 echo'</form>';
                 //もしそれ以外だったら（$nickname,$email,$email）が空じゃなかったらデータベースに登録できる。
            }else{
                  // <form method="post" action="thanks.php" >はPOST送信でthanks.phpでデータを送る。
                  echo'<form method="post" action="thanks.php" >';
                  echo'<input name="nickname" type="hidden" value="'.$nickname.'">';
                  // hidden" value=隠し持って保持してくれるタグ
                  // .$nickname.ドットは文字列をくっつける作用（文字列連結させる）
                  echo'<input name="email" type="hidden" value="'.$email.'">';
                  echo'<input name="goiken" type="hidden" value="'.$goiken.'">';
                  echo'<input type="button" onclick="history.back()" value="戻る">';
                  echo'<input type="submit" value="OK">';
                  echo'</form>';
            }
        ?> 
    </body>
</html>

