 <?php
  date_default_timezone_set('Asia/Tokyo');
  $w = date("w");
  $week_name = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="./css/style_l.css" media="screen and (min-width:770px)">
  <link rel="stylesheet" type="text/css" href="./css/style_s.css" media="screen and (max-width:769px)">
  <link rel="stylesheet" type="text/css" href="../common/css/style_l.css" media="screen and (min-width:770px)">
  <link rel="stylesheet" type="text/css" href="../common/css/style_s.css" media="screen and (max-width:769px)">
  <link rel="stylesheet" type="text/css" href="./css/reset.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&family=Parisienne&display=swap" rel="stylesheet">


  <!-- Javascript・jQueryのファイルリンク -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="js/script.js"></script>

  <!-- slickのファイルリンク -->
  <script src="./js/slick.js" type="text/javascript"></script>
  <link rel="stylesheet" href="./css/slick.css" type="text/css">
  <link rel="stylesheet" href="./css/slick-theme.css" type="text/css">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">


  <title>Time in History</title>
</head>
<body>


 <!--sidebar-->
<div class="sidebar">
  <div class="menu-bar">
    <ul>
      <!--お問い合わせ-->
      <li class="view_todayE"><?php echo "($week_name[$w])\n"?><br><?php echo date("Y.m.d");?></li><!--ヘッダーと同じ高さに合わせて-->
      <li><a href="/mystudy/index/index.php#top-wrapper">Top</a></li><!--トップ画面-->
      <li><a href="/mystudy/index/index.php#about-wrapper">About me</a></li><!--プロフィール-->
      <li><a href="/mystudy/index/index.php#topic-wrapper">Topics</a></li><!--プロフィール-->
      <li><a href="/mystudy/index/index.php#theme-wrapper">Theme</a></li><!--レジュメ-->
      <li><a href="/mystudy/index/index.php#resume-wrapper">Resume</a></li><!--レジュメ-->
      <li><a href="/mystudy/index/index.php#book-wrapper">Book review</a></li><!--本レビュー-->
      <li><a href="/mystudy/index/index.php#note-wrapper">Study note</a></li><!--研究ノート-->
      <li><a href="/mystudy/index/index.php#link-wrapper">Links</a></li><!--リンク-->
      <li><a href="http://sk-kanban.herokuapp.com/login">Work space</a></li><!--トレロ-->
      <li><a href="https://docs.google.com/forms/d/10C2Rgx9cpXIUtIEkbHuGAcwhId7M9Ju6MJVAo6PcYrE/edit?usp=sharing">Contacts</a></li><!--お問い合わせ-->
    </ul>
  </div>
</div>

 <header>
    <h1 class="site-name">Time in History</h1>
     <div class="nav-wrapper">
        <div class="g_nav">
          <ul>
            <li class="menu"><a href="/mystudy/index/index.php#top-wrapper">Top</a></li><!--トップ画面-->
            <li class="menu"><a href="/mystudy/index/index.php#about-wrapper">About me</a></li><!--プロフィール-->
            <li class="menu"><a href="/mystudy/index/index.php#topic-wrapper">Topics</a></li><!--プロフィール-->
            <li class="menu"><a href="/mystudy/index/index.php#theme-wrapper">Theme</a></li><!--レジュメ-->
            <li class="menu"><a href="/mystudy/index/index.php#resume-wrapper">Resume</a></li><!--レジュメ-->
            <li class="menu"><a href="/mystudy/index/index.php#book-wrapper">Book review</a></li><!--本レビュー-->
            <li class="menu"><a href="/mystudy/index/index.php#note-wrapper">Study note</a></li><!--研究ノート-->
            <li class="menu"><a href="/mystudy/index/index.php#link-wrapper">Links</a></li><!--リンク-->
            <li><a href="http://sk-kanban.herokuapp.com/login">Work space</a></li><!--トレロ-->
            <li class="menu"><a href="https://docs.google.com/forms/d/10C2Rgx9cpXIUtIEkbHuGAcwhId7M9Ju6MJVAo6PcYrE/edit?usp=sharing">Contacts</a></li><!--お問い合わせ-->
          </ul>
        </div>
  　　</div>
    </header>

    <div class="menu-trigger">
      <span></span>
      <span></span>
      <span></span>
  　</div>
