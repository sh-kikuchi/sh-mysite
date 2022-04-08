<?php
session_start();

$errors = array();

// 最初の訪問、index.phpからきた時にセッション記録を破棄する為に追加する
unset($_SESSION["username"], $_SESSION["pass"]);

//CSRF対策
//1_ランダムな文字を生成する。
$csrf_token="2d3sf56g745h4gh321f5ht687rt475rfs3f5s6d4g";
//2_セッションにランダムな文字を記録しておきます。
$_SESSION['csrf_token'] = $csrf_token;


/*isset　変数の確認（NULL とは異なることを検査）*/
if(isset($_POST["submit"]) && $_POST["csrf_token"] === $_SESSION['csrf_token']){
  $username = $_POST["username"];
  $pass = $_POST["pass"];

  if($username == "test_kun" && $pass == "pasta"){
    $_SESSION["username"] = $username;
    $_SESSION["pass"] = $pass;
    header("Location:test.php");

  }else{
    if($username != "test_kun"){
      $errors["username"] = "IDが入力されていないか、間違っております";
    }
    if($pass != "pasta"){
      $errors["pass"] = "パスワードが入力されていないか、間違っております";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./css/style_l.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mysite|login</title>
</head>
<body>
 <div class="content-wrapper">
  <header>
    <h2>Welcome to "Mysite"</h2>
    <div class="line"></div>
  </header>

  <!-----------------------------------------------
    エラー時の警告文
    $errorsは連想配列で「username」と「pass」がキー
--------------------------------------------------->
  <?php
    if (isset($errors)) {
        echo "<ul>";
        foreach ($errors as $value) {
            echo "<li>" . $value . "</li>";
        }
        echo "</ul>";
    }
 ?>



    <div class="stripe"></div>

    <div class="login-form">
        <form action="login.php" method="post">
          <!--ランダムな文字列を変数-->
          <input type="hidden" name="csrf_token" value = "<?=$csrf_token?>">
          <label>ID:</label>
          <input type="text" class="username" name="username" placeholder="IDを入力して下さい"><br>
          <label>PASSWORD:</label>
          <input type="text" class="pass" name="pass" placeholder="パスワードを入力して下さい"><br>
          <input type="submit" class="submit" name = "submit" value="ログイン">
        </form>
      </div>

</div>

</body>
</html>
