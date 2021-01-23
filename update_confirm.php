<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント更新確認画面</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
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
    <br><h3>アカウント更新確認画面</h3><br>
      <?php $_POST['id'];  
      ?>
      <ul>
          <li>
            <label>名前(姓)</label>
            <?php 
               echo $_POST['family_name'];  
             ?>
          </li>     
          
          <li>
            <label>名前(名)</label>
            <?php echo $_POST['last_name'];
            ?>
          </li>
          
          <li>
            <label>カナ(姓)</label>
            <?php echo $_POST['family_name_kana'];
            ?>
          </li>      
          
          <li>
            <label>カナ(名)</label>
            <?php echo $_POST['last_name_kana'];
            ?>
          </li> 
          
          <li>
            <label>メールアドレス</label>
            <?php echo $_POST['mail'];
            ?>
          </li>    

          <li>
            <label>性別</label>
            <?php 
              if ( $_POST['gender'] === "0" ){ echo '男'; }
		          else { echo '女'; 
              }
            ?>
          </li>     
          
          <li>
            <label>郵便番号</label>
            <?php echo $_POST['postal_code'];
            ?>
          </li>
          
          <li>
            <label>住所(都道府県)</label>
            <?php echo $_POST['prefecture'];
            ?>
          <li>
              
          <li>  
            <label>住所(市区町村)</label>
            <?php echo $_POST['address_1'];
            ?>
          </li>
          
          <li>
            <label>住所(番地)</label>
            <?php echo $_POST['address_2'];
            ?>
          </li>    
          
          <li>
            <label>アカウント権限</label>
            <?php 
              if ( $_POST['authority'] === "0" ){ echo '一般'; }
		          else { echo '管理者'; 
              }
            ?>
          <li>
              
           
      </ul>
      <br>
    
      <form method="post" action="update.php">
          <input type="submit" class="button1" value="前に戻る">
          <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name"> 
          <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
          <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
          <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
          <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
          <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
          <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
          <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
          <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
          <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
          <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
      </form>
      <form method="post" action="update_complete.php">
          <input type="submit" class="button2" value="更新する">
          <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"> 
          <input type="hidden" name="family_name" value="<?php echo $_POST['family_name']; ?>"> 
          <input type="hidden" name="last_name" value="<?php echo $_POST['last_name']; ?>">
          <input type="hidden" name="family_name_kana" value="<?php echo $_POST['family_name_kana']; ?>">
          <input type="hidden" name="last_name_kana" value="<?php echo $_POST['last_name_kana']; ?>">
          <input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
          <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
          <input type="hidden" name="postal_code" value="<?php echo $_POST['postal_code']; ?>">
          <input type="hidden" name="prefecture" value="<?php echo $_POST['prefecture']; ?>">
          <input type="hidden" name="address_1" value="<?php echo $_POST['address_1']; ?>">
          <input type="hidden" name="address_2" value="<?php echo $_POST['address_2']; ?>">
          <input type="hidden" name="authority" value="<?php echo $_POST['authority']; ?>">
      </form>
     
  
</div>
       
    
    
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>