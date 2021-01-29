<?php


$errorMessage = "";
 
  if (isset($_POST["login"])) {
    // 1. ユーザIDの入力チェック
    if (empty($_POST["mail"])) {  // emptyは値が空のとき
        var_dump($_POST["mail"]);
        $errorMessage = 'ユーザーIDが未入力です。';
    } else if (empty($_POST["password"])) {
        $errorMessage = 'パスワードが未入力です。';
    }
    
 
  if (!empty($_POST["mail"]) && !empty($_POST["password"])) {
    
    $mysqli = new mysqli('localhost', 'root', 'root');
    if ($mysqli->connect_errno) {
      print('<p>エラーが発生したためログイン情報を取得できません。</p>' . $mysqli->connect_error);
      exit();
    }
 
    $mysqli->select_db('homework1');
    $mail = $mysqli->real_escape_string($_POST["mail"]);
    $query = "SELECT * FROM test1 WHERE mail = '".$mail."'";
    $result = $mysqli->query($query);
    
   
    while ($row = $result->fetch_assoc())   
      $db_hashed_pwd = $row['password'];
    } 
    if (password_verify($_POST["password"], $db_hashed_pwd)) {
      header("Location: http://localhost/workspace1/homework1/index4.html");
      exit;
    } 
    else {     
      $errorMessage = "ユーザIDとパスワードを入力してください。もしくは入力に誤りがあります。";
    } 
  } 
 
 
 

?>


<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" type="text/css" href="login1.css">
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
    <form action="" method="post">
    <br><h3>ログイン画面</h3>
    <div class="login">
    <p><font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font></p>
    <ul>
      <li>
        <label>メールアドレス</label>
        <input type="email" class="text" size="30" name="mail" maxlength="100" placeholder=""　pattern="[/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/]"> 
      </li>
        <br> 
      <li>
        <label>パスワード</label>
        <input type="password" class="text" size="30" placeholder="" name="password" maxlength="10" pattern="^[0-9A-Za-z]+$">
      </li>
    </ul>
    </div>
    
      <br>
        <p><input type="submit" class="submit" name="login" value="ログイン"></p>
    </form>
   
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>
    
</body>
    
</html>