<?php
   

    session_start();

    if (!isset($_SESSION["login"])) {
      header("Location: http://localhost/workspace1/homework1/login.php");
      exit();
    }


    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
    $stmt = $pdo->query("select * from test1 where id");

?>


<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント削除確認画面</title>
    <link rel="stylesheet" type="text/css" href="update.css">
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
    
  
    
<div class="confirm">
    
    <br><h3>アカウント削除画面</h3><br>
    <form method="post" action="delete_confirm.php">
      <?php foreach ($stmt as $row) 
       ?>
      <ul>
          <li>
            <label>名前(姓)</label>
            <input type="text" name="family_name" value="<?php 
               echo $id = $_POST['family_name'];  
               ?>" disabled>
          </li>     
          
          <li>
            <label>名前(名)</label>
            <input type="text" name="last_name" value="<?php 
               echo $id = $_POST['last_name'];  
               ?>" disabled>
          </li>
          
          <li>
            <label>カナ(姓)</label>
            <input type="text" name="family_name_kana" value="<?php 
               echo $id = $_POST['family_name_kana'];  
               ?>" disabled>
          </li>      
          
          <li>
            <label>カナ(名)</label>
            <input type="text" name="last_name_kana" value="<?php 
               echo $id = $_POST['last_name_kana'];  
               ?>" disabled>
          </li> 
          
          <li>
            <label>メールアドレス</label>
            <input type="text" name="mail" value="<?php 
               echo $id = $_POST['mail'];  
               ?>" disabled>
          </li>    
          
          <li>
            <label>パスワード</label>
            <input type="password" name="password" value="<?php 
             $id = $_POST['password'];  echo '●●●●●●●●●●';
               ?>" disabled>
          </li>
          
          <li>
            <label>性別</label>
            <input type="text" name="gender" value="<?php 
                $id = $_POST['gender'];  
               if ( $_POST['gender'] === "0" ){ echo '男'; }
		          else { echo '女'; 
              }
               ?>" disabled>
          </li>     
          
          <li>
            <label>郵便番号</label>
            <input type="text" name="postal_code" value="<?php 
               echo $id = $_POST['postal_code'];  
               ?>" disabled>
          </li>
          
          <li>
            <label>住所(都道府県)</label>
            <input type="text" name="prefecture" value="<?php 
               echo $id = $_POST['prefecture'];  
               ?>" disabled>
          <li>
              
          <li>  
            <label>住所(市区町村)</label>
            <input type="text" name="address_1" value="<?php 
               echo $id = $_POST['address_1'];  
               ?>" disabled>
          </li>
          
          <li>
            <label>住所(番地)</label>
            <input type="text" name="address_2" value="<?php 
               echo $id = $_POST['address_2'];  
               ?>" disabled>
          </li>    
          
          <li>
            <label>アカウント権限</label>
            <input type="text" name="authority" value="<?php 
                $id = $_POST['authority']; 
               if ( $_POST['authority'] === "0" ){ echo '一般'; }
		          else { echo '管理者'; 
              }
               ?>" disabled>
          <li>
            <input type="hidden" name="delete_flag" value="<?php 
               echo $id = $_POST['delete_flag'];  
               ?>">
         
              
           
      </ul>
        
      <br> 
          <form action="delete_confirm.php" method="post">
          <p><input type="submit" class="submit" value="確認する"></p>  
              <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">         
              <input type="hidden" name="family_name" value="<?php echo $id = $_POST['family_name']; ?>"> 
              <input type="hidden" name="last_name" value="<?php echo $id = $_POST['last_name']; ?>">
              <input type="hidden" name="family_name_kana" value="<?php echo $id = $_POST['family_name_kana']; ?>">
              <input type="hidden" name="last_name_kana" value="<?php echo $id = $_POST['last_name_kana']; ?>">
              <input type="hidden" name="mail" value="<?php echo $id = $_POST['mail']; ?>">
              <input type="hidden" name="password" value="<?php echo $id = $_POST['password']; ?>">
              <input type="hidden" name="gender" value="<?php echo $id = $_POST['gender']; ?>">
              <input type="hidden" name="postal_code" value="<?php echo $id = $_POST['postal_code']; ?>">
              <input type="hidden" name="prefecture" value="<?php echo $id = $_POST['prefecture']; ?>">
              <input type="hidden" name="address_1" value="<?php echo $id = $_POST['address_1']; ?>">
              <input type="hidden" name="address_2" value="<?php echo $id = $_POST['address_2']; ?>">
              <input type="hidden" name="authority" value="<?php echo $id = $_POST['authority']; ?>"> 
              <input type="hidden" name="delete_flag" value="<?php echo $id = $_POST['delete_flag']; ?>"> 
          </form>
      </form>
  
</div>
       
    
    
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>