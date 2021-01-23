

<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント登録画面</title>
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
    
      <br><h3>アカウント登録画面</h3><br>
      <form method="post" name="check" action="regist_confirm.php" onsubmit="return formCheck()">
      
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
          
      <form id="validation" novalidate>
      <ul>
          <li>
            <label>名前(姓)</label>
            <input type="text"  class="text"  size="30" name="family_name" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"
              value= "<?php
                        if (isset($_POST["family_name"])) {
                            echo $_POST["family_name"];
                        }
                        ?>">
          </li>
          
          <span id="notice-input-text-1" style="display: none; color: red;">名前(姓)が未入力です。</span>
          <li>
            <label>名前(名)</label>
            <input type="text" class="text"  size="30" name="last_name" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*"
              value= "<?php
                        if (isset($_POST["last_name"])) {
                            echo $_POST["last_name"];
                        }
                        ?>">
          </li>
          <span id="notice-input-text-2" style="display: none; color: red;">名前(名)が未入力です。</span>
          <li>
            <label>カナ(姓)</label>
            <input type="text" class="text" size="30" name="family_name_kana" maxlength="10" pattern="[\uFF66-\uFF9F\u30A1-\u30F6]*"
              value= "<?php
                        if (isset($_POST["family_name_kana"])) {
                            echo $_POST["family_name_kana"];
                        }
                        ?>">
          </li> 
          <span id="notice-input-text-3" style="display: none; color: red;">カナ(姓)が未入力です。</span>
          <li>
            <label>カナ(名)</label>
            <input type="text" class="text" size="30" name="last_name_kana" maxlength="10" pattern="[\uFF66-\uFF9F\u30A1-\u30F6]*"
              value= "<?php
                        if (isset($_POST["last_name_kana"])) {
                            echo $_POST["last_name_kana"];
                        }
                        ?>">
          </li>
          <span id="notice-input-text-4" style="display: none; color: red;">カナ(名)が未入力です。</span>
          <li>
            <label>メールアドレス</label>
            <input type="email" class="text" size="30" name="mail" maxlength="100"　pattern="[/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/]"
             value= "<?php
                        if (isset($_POST["mail"])) {
                            echo $_POST["mail"];
                        }
                        ?>">
          </li> 
          <span id="notice-input-text-5" style="display: none; color: red;">メールアドレスが未入力です。</span>
          <li>
            <label>パスワード</label>
            <input type="text" class="text" size="30" name="password" maxlength="10" pattern="^[0-9A-Za-z]+$"
              value= "<?php
                        if (isset($_POST["password"])) {
                            echo $_POST["password"];
                        }
                        ?>">
          </li>
          <span id="notice-input-text-6" style="display: none; color: red;">パスワードが未入力です。</span>
          <li>
            <label>性別</label>
            <input  type="radio" name="gender" value="0" checked = 'checked' <?php if( filter_input(INPUT_POST,'gender') === "0" ){ echo 'checked'; } ?>>男
            <input  type="radio" name="gender" value="1" <?php if( filter_input(INPUT_POST,'gender') === "1" ){ echo 'checked'; } ?>>女
          </li>     
          <li>
            <label>郵便番号</label>
            <input type="text" class="text" size="30" name="postal_code" maxlength="7" pattern="^[0-9]+$"
              value= "<?php
                        if (isset($_POST["postal_code"])) {
                            echo $_POST["postal_code"];
                        }
                        ?>">
          </li>
          <span id="notice-input-text-7" style="display: none; color: red;">郵便番号が未入力です。</span>
          <li>
            <label>住所(都道府県)</label>
             <select class="dropdown" name="prefecture">
             <option value=""disabled style="display:none;" <?php if(empty($_POST['prefecture'])) echo 'selected'; ?>></option>
                
                <option value="北海道" <?php if( filter_input(INPUT_POST,'prefecture') === "北海道" ){ echo 'selected'; } ?>>北海道</option>
                <option value="青森県" <?php if( filter_input(INPUT_POST,'prefecture') === "青森県" ){ echo 'selected'; } ?>>青森県</option>
                <option value="岩手県" <?php if( filter_input(INPUT_POST,'prefecture') === "岩手県" ){ echo 'selected'; } ?>>岩手県</option>
                <option value="宮城県" <?php if( filter_input(INPUT_POST,'prefecture') === "宮城県" ){ echo 'selected'; } ?>>宮城県</option>
                <option value="秋田県" <?php if( filter_input(INPUT_POST,'prefecture') === "秋田県" ){ echo 'selected'; } ?>>秋田県</option>
                <option value="山形県" <?php if( filter_input(INPUT_POST,'prefecture') === "山形県" ){ echo 'selected'; } ?>>山形県</option>
                <option value="福島県" <?php if( filter_input(INPUT_POST,'prefecture') === "福島県" ){ echo 'selected'; } ?>>福島県</option>
                <option value="茨城県" <?php if( filter_input(INPUT_POST,'prefecture') === "茨城県" ){ echo 'selected'; } ?>>茨城県</option>
                <option value="栃木県" <?php if( filter_input(INPUT_POST,'prefecture') === "栃木県" ){ echo 'selected'; } ?>>栃木県</option>
                <option value="群馬県" <?php if( filter_input(INPUT_POST,'prefecture') === "群馬県" ){ echo 'selected'; } ?>>群馬県</option>
                <option value="埼玉県" <?php if( filter_input(INPUT_POST,'prefecture') === "埼玉県" ){ echo 'selected'; } ?>>埼玉県</option>
                <option value="千葉県" <?php if( filter_input(INPUT_POST,'prefecture') === "千葉県" ){ echo 'selected'; } ?>>千葉県</option>
                <option value="東京都" <?php if( filter_input(INPUT_POST,'prefecture') === "東京都" ){ echo 'selected'; } ?>>東京都</option>
                <option value="神奈川県" <?php if( filter_input(INPUT_POST,'prefecture') === "神奈川県" ){ echo 'selected'; } ?>>神奈川県</option>
                <option value="新潟県" <?php if( filter_input(INPUT_POST,'prefecture') === "新潟県" ){ echo 'selected'; } ?>>新潟県</option>
                <option value="富山県" <?php if( filter_input(INPUT_POST,'prefecture') === "富山県" ){ echo 'selected'; } ?>>富山県</option>
                <option value="石川県" <?php if( filter_input(INPUT_POST,'prefecture') === "石川県" ){ echo 'selected'; } ?>>石川県</option>
                <option value="福井県" <?php if( filter_input(INPUT_POST,'prefecture') === "福井県" ){ echo 'selected'; } ?>>福井県</option>
                <option value="山梨県" <?php if( filter_input(INPUT_POST,'prefecture') === "山梨県" ){ echo 'selected'; } ?>>山梨県</option>
                <option value="長野県" <?php if( filter_input(INPUT_POST,'prefecture') === "長野県" ){ echo 'selected'; } ?>>長野県</option>
                <option value="岐阜県" <?php if( filter_input(INPUT_POST,'prefecture') === "岐阜県" ){ echo 'selected'; } ?>>岐阜県</option>
                <option value="静岡県" <?php if( filter_input(INPUT_POST,'prefecture') === "静岡県" ){ echo 'selected'; } ?>>静岡県</option>
                <option value="愛知県" <?php if( filter_input(INPUT_POST,'prefecture') === "愛知県" ){ echo 'selected'; } ?>>愛知県</option>
                <option value="三重県" <?php if( filter_input(INPUT_POST,'prefecture') === "三重県" ){ echo 'selected'; } ?>>三重県</option>
                <option value="滋賀県" <?php if( filter_input(INPUT_POST,'prefecture') === "滋賀県" ){ echo 'selected'; } ?>>滋賀県</option>
                <option value="京都府" <?php if( filter_input(INPUT_POST,'prefecture') === "京都府" ){ echo 'selected'; } ?>>京都府</option>
                <option value="大阪府" <?php if( filter_input(INPUT_POST,'prefecture') === "大阪府" ){ echo 'selected'; } ?>>大阪府</option>
                <option value="兵庫県" <?php if( filter_input(INPUT_POST,'prefecture') === "兵庫県" ){ echo 'selected'; } ?>>兵庫県</option>
                <option value="奈良県" <?php if( filter_input(INPUT_POST,'prefecture') === "奈良県" ){ echo 'selected'; } ?>>奈良県</option>
                <option value="和歌山県" <?php if( filter_input(INPUT_POST,'prefecture') === "和歌山県" ){ echo 'selected'; } ?>>和歌山県</option>
                <option value="鳥取県" <?php if( filter_input(INPUT_POST,'prefecture') === "鳥取県" ){ echo 'selected'; } ?>>鳥取県</option>
                <option value="島根県" <?php if( filter_input(INPUT_POST,'prefecture') === "島根県" ){ echo 'selected'; } ?>>島根県</option>
                <option value="岡山県" <?php if( filter_input(INPUT_POST,'prefecture') === "岡山県" ){ echo 'selected'; } ?>>岡山県</option>
                <option value="広島県" <?php if( filter_input(INPUT_POST,'prefecture') === "広島県<" ){ echo 'selected'; } ?>>広島県</option>
                <option value="山口県" <?php if( filter_input(INPUT_POST,'prefecture') === "山口県" ){ echo 'selected'; } ?>>山口県</option>
                <option value="徳島県" <?php if( filter_input(INPUT_POST,'prefecture') === "徳島県" ){ echo 'selected'; } ?>>徳島県</option>
                <option value="香川県" <?php if( filter_input(INPUT_POST,'prefecture') === "香川県" ){ echo 'selected'; } ?>>香川県</option>
                <option value="愛媛県" <?php if( filter_input(INPUT_POST,'prefecture') === "愛媛県" ){ echo 'selected'; } ?>>愛媛県</option>
                <option value="高知県" <?php if( filter_input(INPUT_POST,'prefecture') === "高知県" ){ echo 'selected'; } ?>>高知県</option>
                <option value="福岡県" <?php if( filter_input(INPUT_POST,'prefecture') === "福岡県" ){ echo 'selected'; } ?>>福岡県</option>
                <option value="佐賀県" <?php if( filter_input(INPUT_POST,'prefecture') === "佐賀県" ){ echo 'selected'; } ?>>佐賀県</option>
                <option value="長崎県" <?php if( filter_input(INPUT_POST,'prefecture') === "長崎県" ){ echo 'selected'; } ?>>長崎県</option>
                <option value="熊本県" <?php if( filter_input(INPUT_POST,'prefecture') === "熊本県" ){ echo 'selected'; } ?>>熊本県</option>
                <option value="大分県" <?php if( filter_input(INPUT_POST,'prefecture') === "大分県" ){ echo 'selected'; } ?>>大分県</option>
                <option value="宮崎県" <?php if( filter_input(INPUT_POST,'prefecture') === "宮崎県" ){ echo 'selected'; } ?>>宮崎県</option>
                <option value="鹿児島県" <?php if( filter_input(INPUT_POST,'prefecture') === "鹿児島県" ){ echo 'selected'; } ?>>鹿児島県</option>
                <option value="沖縄県" <?php if( filter_input(INPUT_POST,'prefecture') === "沖縄県" ){ echo 'selected'; } ?>>沖縄県</option>
             </select>    
          </li> 
          <span id="notice-input-text-8" style="display: none; color: red;">住所(都道府県)が未選択です。</span>
          <li>  
            <label>住所(市区町村)</label>
            <input type="text" class="text" size="30" name="address_1" maxlength="10" pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*"
              value= "<?php
                        if (isset($_POST["address_1"])) {
                            echo $_POST["address_1"];
                        }
                        ?>">
          </li>
          <span id="notice-input-text-9" style="display: none; color: red;">住所(市区町村)が未入力です。</span>
          <li>
            <label>住所(番地)</label>
            <input type="text" class="text" size="30" name="address_2" maxlength="10" pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*"
              value= "<?php
                        if (isset($_POST["address_2"])) {
                            echo $_POST["address_2"];
                        }
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
            <input type="hidden" name="delete_flag" value="0">
      </ul>
      
      <br>
            <p><input type="submit" class="submit" value="確認する"></p>
            
    </form>
  </form>
    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>
 
</body>
    

    
</html>

