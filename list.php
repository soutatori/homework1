<?php
       mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
    $stmt = $pdo->query("SELECT * FROM `test1` ORDER BY `test1`.`id`  DESC");
 ?>



<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント一覧画面</title>
    <link rel="stylesheet" type="text/css" href="list.css">
  </head>
    
<body>
  <header>
      <ul>
          <li>トップ</li>
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
                
                <?php foreach ($stmt as $i => $row) : 
                  ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['family_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['family_name_kana']; ?></td>
                    <td><?php echo $row['last_name_kana']; ?></td>
                    <td><?php echo $row['mail']; ?></td>
                    <td><?php $row['gender'];
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