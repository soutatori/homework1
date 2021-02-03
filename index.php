<?php
//セッションを使うことを宣言
session_start();

//ログインされていない場合は強制的にログインページにリダイレクト
//if (!isset($_SESSION["login"])) {
  //header("Location: index.php");
  //exit();
//}

//ログインされている場合は表示用メッセージを編集
$message = $_SESSION['login']."です";
$message = htmlspecialchars($message);

$show = $_SESSION['login'];

?>

 <?php echo $message;?>





<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>D.I.BLOG</title>
  <link rel="stylesheet" type="text/css" href="style123.css">
     
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
   
    $(document).ready(function(){
      $('.abc').bxSlider({
  
  auto:true,          
  
  speed:2000,
      });
    });
      
  </script>
     
 </head>
    
<body>  
 <img src="diblog_logo.jpg">

 <header>
  <ul>
     <li>トップ</li>
     <li>プロフィール</li>
     <li>D I.Blogについて</li>
     <li>登録フォーム</li>
     <?php if ($show == 1 ){ 
      ?>  
      <li><a href="http://localhost/workspace1/homework1/list.php">アカウント一覧</a></li> <?php } 
      ?>
     <?php if ($show == 0 ){ 
      ?>  <li></li> <?php } 
      ?>
     <?php if ($show == 1 ){ 
      ?>  <li><a href="http://localhost/workspace1/homework1/regist.php">アカウント登録</a></li> <?php } 
      ?>
     <?php if ($show == 0 ){ 
      ?>  <li></li> <?php } 
      ?>
     <li>問い合わせ</li>
     <li>その他</li>
  </ul>
 </header>
    
<main>
<div class="main-container">
 <div class="blue">
     <h1>プログラミングに役立つ書籍</h1>
     <p> 2017年1月15日</p>
     
  <div class="abc">
    <div><img src="jQuery_image1.jpg"></div>
    <div><img src="jQuery_image2.jpg"></div>
    <div><img src="jQuery_image3.jpg"></div>
    <div><img src="jQuery_image4.jpg"></div>
    <div><img src="jQuery_image5.jpg"></div>
  </div>
     
      <p>D.I.BlogはD.I.Worksが提供する演習課題です。</p>
      <p>記事中身</p>
      
  <div class="box">    
   <div class="pic1"><img src="pic1.jpg">
   <p> ドメイン取得方法</p></div>
   <div class="pic1"><img src="pic2.jpg">
   <p>快適な職場環境</p></div>
   <div class="pic1"><img src="pic3.jpg">
   <p>Linuxの基礎</p></div>
   <div class="pic1"><img src="pic4.jpg">
   <p>マーケティング入門</p></div><br>
   <div class="pic1"><img src="pic5.jpg">
   <p>アクティブラーニング</p></div>
   <div class="pic1"><img src="pic6.jpg">
   <p>CSSの効率的な勉強方法</p></div>
   <div class="pic1"><img src="pic7.jpg">
   <p>リーダブルコードとは</p></div>
   <div class="pic1"><img src="pic8.jpg">
   <p>HTML5の可能性</p></div>
  </div>   
 </div>  
     
 <div class="red">
   <h3>人気の記事</h3>
       PHPオススメ本<br>
       PHP MyAdminの使い方<br>
       いま人気のエディタTops<br>
       HTMLの基礎
   
   <h3>オススメリンク</h3>
       ディーアイワークス株式会社<br>
       XAMPPのダウンロード<br>
       Eclipseのダウンロード<br>
       Braketsのダウンロード<br>
  
   <h3>カテゴリー</h3>
       HTML<br>
       PHP<br>
       MySQL<br>
       JavaScript
 </div>  
</div>
</main>
    
<footer>
  copyright D.I.Works|D.I.blog is the one which provides A to Z about programming   
</footer>
      
</body>
</html>