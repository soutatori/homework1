


















<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>アカウント更新画面</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
    
<body>
  <?php
    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");
    $stmt = $pdo->query("select * from test1");
    
  
    
    

  ?>
  
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
        <div class="col-lg-12">
          <div class="page-header">
            <h3 id="tables">アカウント一覧画面</h3>   
          </div>   
            
        　<div class="bs-component">
            <table class="table table-striped table-hover">
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
                </tr>    
              </thead>    
              <tbody>
                <?php $count =1 ?> 
                <?php foreach ($stmt as $i => $row) : ?>
                  <tr>
                    <td><?= $count ?></td>
                    <td><?= $row['family_name'] ?></td>
                    <td><?= $row['last_name'] ?></td>
                    <td><?= $row['family_name_kana'] ?></td>
                    <td><?= $row['last_name_kana'] ?></td>
                    <td><?= $row['mail'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['authority'] ?></td>  
                    <td><?= $row['delete_flag'] ?></td>
                    <td><?= $row['registered_time'] ?></td>
                    <td><?= $row['update_time'] ?></td>
                    <td><a href="update.php ?family_name=<?= $row['']?>&last_name=<?= $row['last_name']?>"
                           class="btn btn-warning">更新</a></td>
                    <td><a href="delete.php ?family_name=<?= $row['']?>&last_name=<?= $row['last_name']?>"
                           class="btn btn-warning">削除</a></td> 
                        
                  </tr>
                <?php $count++;
                     endforeach; ?>
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