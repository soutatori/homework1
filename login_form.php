<?php

// エラーメッセージの初期化
$errorMessage = "";
 
// ログインボタンが押された場合
if (isset($_POST["login"])) {
  // １．ユーザIDの入力チェック
  if (empty($_POST["mail"])) {
    $errorMessage = "アドレスが未入力です。";
  } else if (empty($_POST["password"])) {
    $errorMessage = "パスワードが未入力です。";
  } 
    
    

    
    
    
    
    
    
    
    
 
  // ２．ユーザIDとパスワードが入力されていたら認証する
  if (!empty($_POST["mail"]) && !empty($_POST["password"])) {
    // mysqlへの接続
    $mysqli = new mysqli('localhost', 'root', 'root');
    if ($mysqli->connect_errno) {
      print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
      exit();
    }
 
    // データベースの選択
    $mysqli->select_db('homework1');
 
    // 入力値のサニタイズ
    $mail = $mysqli->real_escape_string($_POST["mail"]);
 
    // クエリの実行
    $query = "SELECT * FROM test1 WHERE mail = '".$mail."'";
    $result = $mysqli->query($query);
    if (!$result) {
      print('クエリーが失敗しました。' . $mysqli->error);
      $mysqli->close();
      exit();
    }
 
   
      
      
      
    while ($row = $result->fetch_assoc()) {
      // パスワード(暗号化済み）の取り出し
      $db_hashed_pwd = $row['password'];
    }
 
    // ３．画面から入力されたパスワードとデータベースから取得したパスワードのハッシュを比較します。
    //if ($_POST["password"] == $pw) {
    if (password_verify($_POST["password"], $db_hashed_pwd)) {
      header("Location: http://localhost/workspace1/homework1/index4.html");
      exit;
    } 
    else {
      // 認証失敗
      $errorMessage = "ユーザIDあるいはパスワードに誤りがあります。";
    } 
  } 
} 
 
?>


<?php print $errorMessage ?>



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
    <form action="" method="post">
    <br><h3>ログイン画面</h3><br>
    <div class="login">
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