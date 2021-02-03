
<?php

mb_internal_encoding("utf-8");

        try{

          
                        
            $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
            $pdo ->exec("insert into test1(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag)
            values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$_POST['delete_flag']."');");   
            
            } catch (PDOException $e) { 
              print "エラーが発生したためアカウント登録できません。" . $e->getMessage(); 
              exit(); 
            } 
         
?>



<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント登録完了画面</title>
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
      <br><h3>アカウント登録完了画面</h3><br>
      <div class="kannryou">
        登録完了しました
      </div>
      
      <div class="back">
        <p><input type="button" onclick="location.href='./index.php'" value="TOPページへ戻る"></p>
      </div>
      
  </form>
  </main>   
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>