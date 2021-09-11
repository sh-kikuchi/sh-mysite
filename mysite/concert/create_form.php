<?php
  require_once("../common/common.php");
  $sql  ="select id,name from Artists;";
  $stmt = $pdo->query($sql); //PDOに備わっているquery機能を使って、1行目で設定した構文を使い、データを取り出す
  $result = $stmt->fetchALL(PDO::FETCH_ASSOC); //PHPの配列,連想配列の形式に変更
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Live</title>
</head>

<body>
  <div class="concert-wrapper">
    <header id="concert_header">
      <h2>ライブ履歴<br><span class="sub">-create-</span></h2>
    </header>
    <div id="content">
      <form action="create.php" method="post" onsubmit="return check()" id="content">
        <h2>Live参戦を記録しよう。</h2>
        <div class="form_input">

          <div class="artist_id">
            <label>アーティスト</label>
            <select name="artist_id" required>
              <?php foreach ($result as $list){?>
                  <option hidden>アーティストを選んでください。</option>
                  <option value="<?php htmlspecialchars($list["id"]);?>">
                    <?php echo htmlspecialchars($list["name"]);?>
                  </option>
              <?php }?>
            </select>
            <p><a href="./create_form_artists.php">一覧にない場合はコチラ</a></p>
          </div>

          <div class="concert_name">
            <label>コンサート名</label>
            <input type="concert_name" name="concert_name">
          </div>

        　<div class="date">
            <label>日にち</label>
            <input type="date" name="date">
          </div>

        　<div class="place">
            <label>ライブ会場</label>
            <input type="place" name="place">
          </div>

        　<div class="format">
            <label>ライブ形態</label>
            <select name="format" required>
                <option value="" hidden>どのようなご用件ですか</option>
                <option value="ワンマン">ワンマン</option>
                <option value="フェス">フェス</option>
                <option value="フリーライブ">フリーライブ</option>
                <option value="ライブビューイング">ライブビューイング</option>
                <option value="その他">その他</option>
              </select>
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
