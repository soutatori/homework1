 <?php
    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
    $stmt = $pdo->query("select * from test1_id");
    
  
    
    

  ?>






<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント更新画面</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
    
      <br><h3>アカウント更新画面</h3><br>
      <form method="post" action="update_confirm.php">
    
      
      <ul>
          <li>
            <label>名前(姓)</label>
            <input type="text" class="text" size="35" name="family_name">
          </li>     
          <li>
            <label>名前(名)</label>
            <input type="text" class="text" size="35" name="last_name">
          </li>
          <li>
            <label>カナ(姓)</label>
            <input type="text" class="text" size="35" name="family_name_kana">
          </li>     
          <li>
            <label>カナ(名)</label>
            <input type="text" class="text" size="35" name="last_name_kana">
          </li>
          <li>
            <label>メールアドレス</label>
            <input type="text" class="text" size="35" name="mail">
          </li>     
          <li>
            <label>パスワード</label>
            <input type="text" class="text" size="35" name="password">
          </li>
          <li>
            <label>性別</label>
            <input type="radio" name="gender" value="男" checked="checked">男
            <input type="radio" name="gender" value="女">女
          </li>     
          <li>
            <label>郵便番号</label>
            <input type="text" class="text" size="35" name="postal_code">
          </li>
          <li>
            <label>住所(都道府県)</label>
             <select class="dropdown" name="prefecture">
                <option value=""></option> 
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
             </select>    
          <li> 
          <li>  
            <label>住所(市区町村)</label>
            <input type="text" class="text" size="35" name="address_1">
          </li>
          <li>
            <label>住所(番地)</label>
            <input type="text" class="text" size="35" name="address_2">
          </li>     
          <li>
            <label>アカウント権限</label>
            <select class="dropdown" name="authority"> 
                <option value="一般">一般</option>
                <option value="管理者">管理者</option>
          <li>
            </select>
      </ul>
      
      <br>
            <p><input type="submit" class="submit" value="確認する"></p>     
  </form>
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>