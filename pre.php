<?php
    //データベースへ接続
    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=homework1;host=localhost;" ,"root" ,"root");

        if(@$_POST["id"] != "" OR @$_POST["family_name"] != ""){ //IDおよびユーザー名の入力有無を確認
            $stmt = $pdo->query("SELECT * FROM test1 WHERE id='".$_POST["id"] ."' OR Name LIKE  '%".$_POST["family_name"]."%')"); //SQL文を実行して、結果を$stmtに代入する。
        var_dump(@$_POST["id"]);
        var_dump(@$_POST["family_name"]);
      
            
            
        }
?>


<html>
    <head>
        <title>User List</title>
    </head>
    <body>
        <form action="pre.php" method="post">
            ID:<input type="text" name="id"><br>
            Name:<input type="text" name="family_name"><br>
            <input type="submit">
        </form>

<table>
            <tr><th>ID</th><th>User Name</th></tr>
            <!-- ここでPHPのforeachを使って結果をループさせる -->
            <?php foreach ((array)$stmt as $row): ?>
                <tr><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td></tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
	