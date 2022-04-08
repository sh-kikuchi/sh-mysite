<?php
  $id = intval($_GET["id"]);
  $name = $_GET["name"];
  $mail = $_GET["mail"];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>フォーム更新</title>
</head>

<body>
  <header>
    <div class="icon">
      <a href="list.php">
      </a>
    </div>
    <h1>リストの更新<br><span class="sub">-update-</span></h1>
  </header>
  <div id="content">
    <form action="update.php" method="post" onsubmit="return check()" id="content">
      <h2><span class="strong orange">「ID:<?php echo htmlspecialchars($id)?>」</span>の登録情報を<br class="sp">以下のように変更します。</h2>
      <div class="form_input">
        <div class="id">
          <input type="hidden" name="id" value=<?php echo htmlspecialchars($id)?>>
        </div>
        <div class="username">
          <label>ユーザー名</label>
          <input type="text" name="username" placeholder=<?php echo htmlspecialchars($name)?>>
        </div>
        <div class="mail">
          <label>メールアドレス</label>
          <input type="mail" name="mail" placeholder=<?php echo htmlspecialchars($mail)?>>
        </div>
      </div>
      <div class="form_btn">
        <div class="form_return_btn">
          <p class="return"><a href="list.php">リスト表に戻る</a></p>
        </div>
        <div class="form_create_btn">
          <input type="submit" value="新規登録">
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript">
    function check() {
      if (window.confirm('登録をしてよろしいですか？')) { // 確認ダイアログを表示
        // 「OK」時は送信を実行
        return true;
      } else { // 「キャンセル」時の処理
        window.alert('登録がキャンセルされました'); // 警告ダイアログを表示
        // 送信を中止
        return false;
      }
    }
  </script>
</body>
</html>
