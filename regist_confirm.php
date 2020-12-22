<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント登録確認画面</title>
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
    <br><h3>アカウント登録確認画面</h3><br>

      <ul>
          <li>
            <label>名前(姓)</label>
            <?php echo $_POST['family_name'];
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
            <label>パスワード</label>
            <?php echo $_POST['password'];
            ?>
          </li>
          
          <li>
            <label>性別</label>
            <?php echo $_POST['gender'];
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
            <?php echo $_POST['authority'];
            ?>
          <li>
              
           
      </ul>
      <br>
    
      <form action="regist.php">
          <input type="submit" class="button1" value="前に戻る">
      </form>
    
      <form action="regist_complete.php">
          <input type="submit" class="button2" value="登録する">
      </form>
     
  
</div>
       
    
    
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>