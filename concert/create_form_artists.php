<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="CSS/reset.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/responsive.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>LIVE</title>
</head>

<body>
  <div class="concert-wrapper">
    <header id="concert_header">
      <div>
        <h2>アーティストマスタ<br><span class="sub">-create-</span></h2>
      </div>
    </header>
    <div id="content">
      <form action="create_artists.php" method="post" onsubmit="return check()" id="content_form">
        <h2>新たにアーティストを登録する。</h2>
        <div class="form_input">
            <div class="name">
              <label>アーティスト名</label>
              <input type="text" name="name">
            </div>

            <div class="form_year">
              <label>結成年</label>
              <input type="text" name="form_year">
            </div>

            <div class="mjr_debut">
              <label>デビュー年</label>
              <input type="text" name="mjr_debut">
            </div>
         </div>

        <div class="form_btn">
          <div class="form_create_btn">
            <input type="submit" value="新規登録">
          </div>
          <div class="form_return_btn">
            <p class="return"><a href="create_form.php">リスト表に戻る</a></p>
          </div>

        </div>
      </form>
    </div>
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
