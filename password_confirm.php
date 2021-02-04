<?php

    session_start();

    if (!isset($_SESSION["login"])) {
      header("Location: http://localhost/workspace1/homework1/login.php");
      exit();
    }

?>


<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>パスワード変更確認画面</title>
    <link rel="stylesheet" type="text/css" href="password_confirm.css">
  </head>
    
<body>
  
  <header>
      <ul>
          <li>トップ</li>
          <li>プロフィール</li>
          <li>D I.Blogについて</li>
          <li>登録フォーム</li>
          <li><a href="http://localhost/workspace1/homework1/list.php">アカウント一覧</a></li>
          <li>問い合わせ</li>
          <li>その他</li>
      </ul>
  </header>    
    
    
 <main>
      <br><h3>パスワード変更確認画面</h3><br>
      <div class="confirm">
        <ul>
          <li>
            <label>パスワード</label>
            <?php 
              echo '●●●●●●●●●●';
            ?>
          </li>
        </ul>
      </div>
      
    
      <form action="password.php" method="post">
          <input type="submit" class="button1" value="前に戻る">
          <input type="hidden" name="id" value="<?php echo $id = $_POST['id']; ?>"> 
          <input type="hidden" name="password" value="<?php echo $id = $_POST['password']; ?>">
      </form>
  
          
      <form action="password_complete.php" method="post">
          <input type="submit" class="button2" value="変更する">
          <input type="hidden" name="id" value="<?php echo $id = $_POST['id']; ?>"> 
          <input type="hidden" value="<?php echo $hash_pass = password_hash($_POST['password'], PASSWORD_DEFAULT); ?>" name="password">
      </form>
     
      
  </main>
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>