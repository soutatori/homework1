

<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント削除確認画面</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
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
      <br><h3>アカウント削除確認画面</h3><br>
      <div class="kannryou">
        
        本当に削除してよろしいですか?
      </div>
      
      <div class="delete">
      <form action="delete.php">
          <input type="submit" class="button1" value="前に戻る">
      </form>
  
          
      <form action="delete_complete.php" method="post">
          <input type="submit" class="button2" value="削除する">
          <input type="hidden" name="id" value="<?php echo $id = $_POST['id']; ?>"> 
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
      </form>
      </div>
      
  </main>
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>