
<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>パスワード更新画面</title>
    <link rel="stylesheet" type="text/css" href="password.css">
    
    
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
    
      <br><h3>パスワード更新画面</h3><br>
      <form method="post" name="check" action="password_confirm.php" onsubmit="return formCheck()">
      
      <script>

        function formCheck(){
            var flag = 0;
            
            
            if( document . check . password . value == "" ){
                flag = 1;
                document . getElementById( 'notice-input-text-6' ) . style . display = "block";
            }else{
                document . getElementById( 'notice-input-text-6' ) . style . display = "none";
            }
                   

            
            
            
            if( flag ){
                window . alert( 'パスワードを入力して下さい。' );
                return false;
            }else{
                return true;
            }
        }
        </script>    
          
      <form id="validation" novalidate>
          
      <input type="hidden" name="id" value= "<?php 
        echo $_POST["id"];
        ?>">    
      
      <ul>
  
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
     
  
         
      </ul>
      
      <br>
            <p><input type="submit" class="submit" value="確認する"></p>
            
    </form>
  </form>

    
<footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
</footer>
 
</body>
    

    
</html>

