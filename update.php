






<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント更新画面</title>
    <link rel="stylesheet" type="text/css" href="style5.css">
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
    
      <br><h3>アカウント更新画面</h3><br>
       <form method="post" name="check" action="update_confirm.php" onsubmit="return formCheck()">
          
       <script>

        function formCheck(){
            var flag = 0;
            if( document . check . family_name . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-1' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-1' ) . style . display = "none";
            }
            
            if( document . check . last_name . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-2' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-2' ) . style . display = "none";
            }
            
            if( document . check . family_name_kana . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-3' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-3' ) . style . display = "none";
            }
            
            if( document . check . last_name_kana . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-4' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-4' ) . style . display = "none";
            }
            
            if( document . check . mail . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-5' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-5' ) . style . display = "none";
            }
            
            if( document . check . password . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-6' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-6' ) . style . display = "none";
            }
                   
            if( document . check . postal_code . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-7' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-7' ) . style . display = "none";
            }
            
            if( document . check . prefecture . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-8' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-8' ) . style . display = "none";
            }
            
            if( document . check . address_1 . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-9' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-9' ) . style . display = "none";
            }
            
            if( document . check . address_2 . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-10' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-10' ) . style . display = "none";
            }
            
           
            
            if( flag ){
                window . alert( '必須項目は全て入力して下さい。' );
                return false;
            }else{
                return true;
            }
        }
        </script>    
          
          
      <input type="hidden" name="id" value= "<?php 
        echo $_POST["id"];
        ?>">
      <ul>
          <li>
            <label>名前(姓)</label>
            <input type="text" class="text" size="30" name="family_name" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"
              value= "<?php echo $_POST["family_name"];
              ?>">
          </li> 
          <span id="notice-input-text-1" style="display: none; color: red;">名前(姓)が未入力です。</span>
          <li>
            <label>名前(名)</label>
            <input type="text" class="text" size="30" name="last_name" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"
              value= "<?php echo $_POST["last_name"];
              ?>">
          </li>
           <span id="notice-input-text-2" style="display: none; color: red;">名前(名)が未入力です。</span>
          <li>
            <label>カナ(姓)</label>
            <input type="text" class="text" size="30" name="family_name_kana" maxlength="10" pattern="[\uFF66-\uFF9F\u30A1-\u30F6]*"
              value= "<?php echo $_POST["family_name_kana"];
              ?>">
          </li> 
          <span id="notice-input-text-3" style="display: none; color: red;">カナ(姓)が未入力です。</span>
          <li>
            <label>カナ(名)</label>
            <input type="text" class="text" size="30" name="last_name_kana" maxlength="10" pattern="[\uFF66-\uFF9F\u30A1-\u30F6]*"
              value= "<?php echo $_POST["last_name_kana"];
              ?>">
          </li>
          <span id="notice-input-text-4" style="display: none; color: red;">カナ(名)が未入力です。</span>
          <li>
            <label>メールアドレス</label>
            <input type="email" class="validate[required]" size="30" name="mail" maxlength="100"　pattern="[/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/]"
              value= "<?php echo $_POST["mail"];
              ?>">
          </li> 
          <span id="notice-input-text-5" style="display: none; color: red;">メールアドレスが未入力です。</span>
          <li>
            <label>パスワード</label>
            <input type="text" class="text" size="30" name="password" maxlength="10" pattern="^[0-9A-Za-z]+$"
              value= "<?php echo $_POST["password"];
              ?>">
          </li>
          <span id="notice-input-text-6" style="display: none; color: red;">パスワードが未入力です。</span>
          <li>
            <label>性別</label>
            <input type="radio" name="gender" value="0" checked="checked">男
            <input type="radio" name="gender" value="1">女
          </li>     
          <li>
            <label>郵便番号</label>
            <input type="text" class="text" size="30" name="postal_code" maxlength="7" pattern="^[0-9]+$"
              value= "<?php echo $_POST["postal_code"];
              ?>">
          </li>
          <span id="notice-input-text-7" style="display: none; color: red;">郵便番号が未入力です。</span>
          <li>
            <label>住所(都道府県)</label>
             <select class="dropdown" name="prefecture">
               <?php $prefecture = $_POST['prefecture'];
                 if (true){
                   echo "<option selected>$prefecture</option>";
                } 
             ?>
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
          <span id="notice-input-text-8" style="display: none; color: red;">住所(都道府県)が未選択です。</span>
          <li>  
            <label>住所(市区町村)</label>
            <input type="text" class="text" size="30" name="address_1" maxlength="10" pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*"
              value= "<?php echo $_POST["address_1"];
              ?>">
          </li>
          <span id="notice-input-text-9" style="display: none; color: red;">住所(市区町村)が未入力です。</span>
          <li>
            <label>住所(番地)</label>
            <input type="text" class="text" size="30" name="address_2" maxlength="10" pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*"
              value= "<?php echo $_POST["address_2"];
              ?>">
          </li> 
          <span id="notice-input-text-10" style="display: none; color: red;">住所(番地)が未入力です。</span>
          <li>
            <label>アカウント権限</label>
            <select class="dropdown" name="authority"> 
            
              <option value="0" <?php if( !empty($_POST['authority']) && $_POST['authority'] === "0" ){ echo 'selected'; } ?>>一般</option>
			  <option value="1" <?php if( !empty($_POST['authority']) && $_POST['authority'] === "1" ){ echo 'selected'; } ?>>管理者</option>
            </select>
          </li>
           
      </ul>
      
      <br>
            <p><input type="submit" class="submit" value="確認する"></p>     
  </form>
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>

</body>
</html>