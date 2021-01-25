<?php
      mb_internal_encoding("utf-8");

  try{   

      $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
      $stmt = $pdo->query();

      } catch (PDOException $e) { 
              print "エラーが発生したためログイン情報を取得できません。" . $e->getMessage(); 
              exit(); 
            } 

?>


<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
    
<body>
  <header>
    <ul>
          <li>プロフィール</li>
          <li>D I.Blogについて</li>
          <li>問い合わせ</li>
          <li>その他</li>
    </ul>
  </header>   
    <form>
    <br><h3>ログイン画面</h3><br>
    <div class="login">
    <ul>
      <li>
        <label>メールアドレス</label>
        <input type="email" class="text" size="30" name="mail" maxlength="100"　pattern="[/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/]"> 
      </li>
        <br> 
      <li>
        <label>パスワード</label>
        <input type="password" class="text" size="30" name="password" maxlength="10" pattern="^[0-9A-Za-z]+$">
      </li>
    </ul>
    </div>
    
      <br>
        <p><input type="submit" class="submit" value="ログイン"></p>
    </form>
   
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>
    
</body>
</html>