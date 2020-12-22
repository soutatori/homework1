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
  
          
      <form action="delete_complete.php">
          <input type="submit" class="button2" value="削除する">
      </form>
      </div>
      
  </main>
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>