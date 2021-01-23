<?php

mb_internal_encoding("utf-8");

        try {
           
             $id = $_POST['id'];
             $family_name = $_POST['family_name'];
             $last_name = $_POST['last_name'];
             $family_name_kana = $_POST['family_name_kana'];
             $last_name_kana = $_POST['last_name_kana'];
             $mail = $_POST['mail'];
             $gender = $_POST['gender'];
             $postal_code = $_POST['postal_code'];
             $prefecture = $_POST['prefecture'];
             $address_1 = $_POST['address_1'];
             $address_2 = $_POST['address_2'];
             $authority = $_POST['authority'];
            
             $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
             $pdo ->exec("update test1 set family_name = '$family_name' , last_name = '$last_name' , family_name_kana = '$family_name_kana' , last_name_kana = '$last_name_kana' , mail = '$mail' ,  gender = '$gender' , postal_code = '$postal_code' , prefecture = '$prefecture' , address_1 = '$address_1' , address_2 = '$address_2' , authority = '$authority' where id = $id");
             
             } catch (PDOException $e) { 
            print "エラーが発生したためアカウント更新できません。" . $e->getMessage(); 
            exit(); 
            } 
?>
<input type="hidden" name="id" value="<?php echo $id = $_POST['id']; ?>"> 
          <input type="hidden" name="family_name" value="<?php echo $id = $_POST['family_name']; ?>"> 
          <input type="hidden" name="last_name" value="<?php echo $id = $_POST['last_name']; ?>">
          <input type="hidden" name="family_name_kana" value="<?php echo $id = $_POST['family_name_kana']; ?>">
          <input type="hidden" name="last_name_kana" value="<?php echo $id = $_POST['last_name_kana']; ?>">
          <input type="hidden" name="mail" value="<?php echo $id = $_POST['mail']; ?>">
          <input type="hidden" name="gender" value="<?php echo $id = $_POST['gender']; ?>">
          <input type="hidden" name="postal_code" value="<?php echo $id = $_POST['postal_code']; ?>">
          <input type="hidden" name="prefecture" value="<?php echo $id = $_POST['prefecture']; ?>">
          <input type="hidden" name="address_1" value="<?php echo $id = $_POST['address_1']; ?>">
          <input type="hidden" name="address_2" value="<?php echo $id = $_POST['address_2']; ?>">
          <input type="hidden" name="authority" value="<?php echo $id = $_POST['authority']; ?>">

<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント更新完了画面</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
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
  <form>
      <br><h3>アカウント更新完了画面</h3><br>
      <div class="kannryou">
        更新完了しました
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