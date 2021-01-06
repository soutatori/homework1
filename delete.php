    <?php

    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
    $stmt = $pdo->query("select * from test1");

    
    
    
    $sql = "select * from test1　whare id";
    

    
    
        
  
 

 




    

     ?>


<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント削除確認画面</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
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
    
  
    
<div class="confirm">
    
    <br><h3>アカウント削除画面</h3><br>
    <form method="post" action="delete_confirm.php">
      <?php foreach ($stmt as $row) 
   
 ?>
      <ul>
          <li>
            <label>名前(姓)</label>
            <input id="family_name" type="text" name="family_name" value="<?php 
  echo $row['family_name'];  
 ?>" disabled>
              
          </li>     
          
          <li>
            <label>名前(名)</label>
         
          </li>
          
          <li>
            <label>カナ(姓)</label>
          
          </li>      
          
          <li>
            <label>カナ(名)</label>
          
          </li> 
          
          <li>
            <label>メールアドレス</label>
         
          </li>    
          
          <li>
            <label>パスワード</label>
          
          </li>
          
          <li>
            <label>性別</label>
           
          </li>     
          
          <li>
            <label>郵便番号</label>
          
          </li>
          
          <li>
            <label>住所(都道府県)</label>
            
          <li>
              
          <li>  
            <label>住所(市区町村)</label>
           
          </li>
          
          <li>
            <label>住所(番地)</label>
            
          </li>    
          
          <li>
            <label>アカウント権限</label>
            
          <li>
              
           
      </ul>
      <br>
    　　　　<p><input type="submit" class="submit" value="確認する"></p>    
      
      </form>
  
</div>
       
    
    
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>