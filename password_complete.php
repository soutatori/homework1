<?php

  mb_internal_encoding("utf-8");

        try {
             
            
             $id = $_POST['id'];
             $password = $_POST['password'];
             $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
             $pdo ->exec("update test1 set password = '$password' where id = $id");
            
            
             } catch (PDOException $e) { 
            print "エラーが発生したためパスワード更新できません。" . $e->getMessage(); 
            exit(); 
            } 
?>


<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>パスワード変更完了画面</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
  </head>
    
<body>
  
  <header>
      <ul>
          <li>トップ</li>
          <li>プロフィール</li>
          <li>D I.Blogについて</li>
          <li>登録フォーム</li>
          <li>問い合わせ</li>
          <li>その他</li>
      </ul>
  </header>    
    
  <main>
  <form>
      <br><h3>パスワード変更完了画面</h3><br>
      <div class="kannryou">
        変更完了しました
      </div>
       
      <div class="back">
        <p><input type="button" onclick="location.href='./index4.html'" value="TOPページへ戻る"></p>
      </div>
      
  </form>
  </main>   
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>