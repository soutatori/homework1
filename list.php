<?php
  
    //mb_internal_encoding("utf-8");
    //$pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");

        //if(@$_POST["family_name"] != "" OR @$_POST["last_name"] != ""){ //IDおよびユーザー名の入力有無を確認
            //$stmt = $pdo->query("SELECT * FROM test1 =　Name LIKE  '%".$_POST["family_name"]."%' OR Name LIKE  '%".$_POST["last_name"]."%')"); //SQL文を実行して、結果を$stmtに代入する。
        //var_dump(@$_POST["family_name"]);
        //var_dump($_POST["family_name"]);
            
        //}
?>

















<?PHP

    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");

        $family_name=filter_input(INPUT_POST,'family_name',FILTER_VALIDATE_INT);
        $last_name=filter_input(INPUT_POST,'last_name',FILTER_VALIDATE_INT);

        if(count($_POST)>0){
        $stmt = $pdo->query ("SELECT * FROM test1 where 1 ");
        $data=[];
            
        if(is_numeric($family_name)){
        $sql.=" and family_name=? ";
        $data = array($family_name);
        }
            
        if(is_numeric($last_name)){
        $sql.=" and last_name=? ";
        $data[] = $last_name;
        }
            
        //$hoge = '';
 //if(!isset($hoge['family_name'])){
     //if(!is_array($hoge)){
         //$hoge = array();
     //} 
     //$hoge['family_name'] = '佐藤';
     //var_dump($hoge);
 //}
        //}

        }
?>











<?php

    //session_start();

    //if (!isset($_SESSION["login"])) {
      //header("Location: http://localhost/workspace1/homework1/login.php");
      //exit();
    //}

    //mb_internal_encoding("utf-8");
    //$pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
    //$stmt = $pdo->query("SELECT * FROM `test1` ORDER BY `test1`.`id`  DESC");

 ?>


<?php

    //session_start();

    //if (!isset($_SESSION["login"])) {
      //header("Location: http://localhost/workspace1/homework1/login.php");
      //exit();
    //}

    //mb_internal_encoding("utf-8");

//$family_name = $_POST['family_name'];


    //$pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");

    //$stmt = $pdo->prepare(" SELECT * FROM test1 WHERE  submit_name LIKE '%" . $_POST["family_name"] . "%' "); 

    //if(@$_POST["id"] != "" OR @$_POST["family_name"] != ""){ //IDおよびユーザー名の入力有無を確認
            //$stmt = $pdo->query("SELECT * FROM test1 WHERE ID= '%".$_POST["family_name"]."%'"); //SQL文を実行して、結果を$stmtに代入する。
        //}





 ?>


<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント一覧画面</title>
    <link rel="stylesheet" type="text/css" href="list1.css">
  </head>
    
<body>
  <header>
      <ul>
          <li><a href="http://localhost/workspace1/homework1/index.php">トップ</a></li>
          <li>プロフィール</li>
          <li>D I.Blogについて</li>
          <li>登録フォーム</li>
          <li><a href="http://localhost/workspace1/homework1/regist.php">アカウント登録</a></li>
          <li>問い合わせ</li>
          <li>その他</li>
      </ul>
  </header> 
   
  <div class="container">
    <div class="bs-docssection" style="magin-top: 0px;">
      <div class="row">
        <div class="main">
          <div class="page-header">
            <h3 id="tables">アカウント一覧画面</h3>   
          </div>   
            
            <div class="add">
            <form action="" method="post">
            <ul>
              <li>
                <label>名前(姓)</label>
                <input type="text"  class="text"  size="30" name="family_name" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*">
              </li>
              
              <li>
                <label>名前(名)</label>
                <input type="text" class="text"  size="30" name="last_name" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*">
              </li>
             
              <li>
                <label>カナ(姓)</label>
                <input type="text" class="text" size="30" name="family_name_kana" maxlength="10" pattern="[\uFF66-\uFF9F\u30A1-\u30F6]*">
              </li>
                
              <li>
                <label>カナ(名)</label>
                <input type="text" class="text" size="30" name="last_name_kana" maxlength="10" pattern="[\uFF66-\uFF9F\u30A1-\u30F6]*">
              </li>
                
              <li>
                <label>メールアドレス</label>
                <input type="email" class="text" size="30" name="mail" maxlength="100"　pattern="[/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/]">
              </li>
              
              <li>
                <label>性別</label>
                <input  type="radio" name="gender" value="0" checked = 'checked' <?php if( filter_input(INPUT_POST,'gender') === "0" ){ echo 'checked'; } ?>>男
                <input  type="radio" name="gender" value="1" <?php if( filter_input(INPUT_POST,'gender') === "1" ){ echo 'checked'; } ?>>女
              </li>
                
              <li>
                <label>アカウント権限</label>
                <select class="dropdown" name="authority"> 
                  <option value="0" <?php if( !empty($_POST['authority']) && $_POST['authority'] === "0" ){ echo 'selected'; } ?>>一般</option>
			      <option value="1" <?php if( !empty($_POST['authority']) && $_POST['authority'] === "1" ){ echo 'selected'; } ?>>管理者</option>
                </select>
              </li>  
            </ul>
              <div class="kensaku">
                <input type="submit" name="search" value="検索">
              </div>
            </form>    
            </div>    
            
        　<div class="bscomponent">
            <table class="table" border="2">
              <thead>
                <tr>
                  <th>ID</th>  
                  <th>名前(姓)</th>
                  <th>名前(名)</th>
                  <th>カナ(姓)</th>
                  <th>カナ(名)</th>
                  <th>メールアドレス</th>
                  <th>性別</th>
                  <th>アカウント権限</th>
                  <th>削除フラグ</th>
                  <th>登録日時</th>
                  <th>更新日時</th>
                  <th>操作</th>
                  <th>操作</th>
                  <th>パスワード変更</th>
                </tr>    
              </thead>    
              <tbody>
                
                <?php //foreach ($stmt as $i => $row) : 
                  ?>
                  
                <?php //foreach ((array)$sql as $row): 
                 ?>
                  
                  <?php foreach ((array)$stmt as $row): ?>
             
                  
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['family_name'];　?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['family_name_kana']; ?></td>
                    <td><?php echo $row['last_name_kana']; ?></td>
                    <td><?php echo $row['mail']; ?></td>
                    <td><?php 
                        if ( $row['gender'] === "0" ){ echo '男'; }
		            else { echo '女'; 
                       }?></td>
                    <td><?php   
                        if ( $row['authority'] === "0" ){ echo '一般'; }
		            else { echo '管理者'; 
                       }?></td>  
                    <td><?php   
                        if ( $row['delete_flag'] === "0" ){ echo '有効'; }
		            else { echo '無効'; 
                       }?></td> 
                    <td><?php echo $row['registered_time']; ?></td>
                    <td><?php echo $row['update_time']; ?></td>
                    <td>
                        
                      <form method="post" action="update.php">
                          <input type="submit" class="button1" value="更新">
                          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                          <input type="hidden" name="family_name" value="<?php echo $row['family_name']; ?>">
                          <input type="hidden" name="last_name" value="<?php echo $row['last_name']; ?>">
                          <input type="hidden" name="family_name_kana" value="<?php echo $row['family_name_kana']; ?>">
                          <input type="hidden" name="last_name_kana" value="<?php echo $row['last_name_kana']; ?>">
                          <input type="hidden" name="mail" value="<?php echo $row['mail']; ?>">
                          <input type="hidden" name="password" value="<?php echo $row['password']; ?>">
                          <input type="hidden" name="gender" value="<?php echo $row['gender']; ?>">
                          <input type="hidden" name="postal_code" value="<?php echo $row['postal_code']; ?>">
                          <input type="hidden" name="prefecture" value="<?php echo $row['prefecture']; ?>">
                          <input type="hidden" name="address_1" value="<?php echo $row['address_1']; ?>">
                          <input type="hidden" name="address_2" value="<?php echo $row['address_2']; ?>">
                          <input type="hidden" name="authority" value="<?php echo $row['authority']; ?>">
                      </form>
                   </td>  
                   <td>
                      <form method="post" action="delete.php">
                          <input type="submit" class="button2" value="削除">
                          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                          <input type="hidden" name="family_name" value="<?php echo $row['family_name']; ?>">
                          <input type="hidden" name="last_name" value="<?php echo $row['last_name']; ?>">
                          <input type="hidden" name="family_name_kana" value="<?php echo $row['family_name_kana']; ?>">
                          <input type="hidden" name="last_name_kana" value="<?php echo $row['last_name_kana']; ?>">
                          <input type="hidden" name="mail" value="<?php echo $row['mail']; ?>">
                          <input type="hidden" name="password" value="<?php echo $row['password']; ?>">
                          <input type="hidden" name="gender" value="<?php echo $row['gender']; ?>">
                          <input type="hidden" name="postal_code" value="<?php echo $row['postal_code']; ?>">
                          <input type="hidden" name="prefecture" value="<?php echo $row['prefecture']; ?>">
                          <input type="hidden" name="address_1" value="<?php echo $row['address_1']; ?>">
                          <input type="hidden" name="address_2" value="<?php echo $row['address_2']; ?>">
                          <input type="hidden" name="authority" value="<?php echo $row['authority']; ?>">
                          <input type="hidden" name="delete_flag" value="<?php echo $row['delete_flag']; ?>">
                      </form>
                    </td> 
                    <td>
                      <form method="post" action="password.php">
                      <input type="submit" class="button3" value="変更">
                     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                          
                      </form>
                    </td>
                        
                  </tr>
                <?php endforeach; 
                 ?>
              </tbody>  
            </table>   
          </div>
        </div>
      </div>   
    </div>
    </div>
    
    <footer>copyright D.I.Works|D.I.blog is the one which provides A to Z about programming  
    </footer>

</body>
</html>