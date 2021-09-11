<?php
  require_once("../common/common.php");
  $sql  ="select date,concert_name,a.name,place,format from artists as a inner join concerts as c on a.id = c.artist_id order by date desc;";

  $search = @$_POST["search"];
  $sql2 ="select date,concert_name,a.name,place,format from artists as a inner join concerts as c on a.id = c.artist_id  where name like '%".$search."%' order by date desc;";

  if($search != ""){ //IDおよびユーザー名の入力有無を確認
    $stmt = $pdo->query($sql2);
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC); //PHPの配列,連想配列の形式に変更
  }else{
    $stmt = $pdo->query($sql); //PDOに備わっているquery機能を使って、1行目で設定した構文を使い、データを取り出す
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC); //PHPの配列,連想配列の形式に変更
  }
?>
  <!--共通部分：へッター（include関数）-->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/header.php'); ?>
    <section id = "concert-wrapper">
     <div class="header-title"> <span class="header-color"> </span> LIVE</div>
     <!-- <a class="list_add" href="./create_form.php">新規登録</a>-->
      <!-- search -->
      <div id="search">
        <form action="list.php" method="POST" class="search">
            <!--  <label>ユーザー名で検索</label> -->
            <input id ="stxt" type="text" name="search" placeholder="アーティスト名で検索">
            <button id="sbtn" type="submit"><i class="fas fa-search"></i> </button>
        </form>
      </div>
      <?php if($search != ""){ ?>
        <p class="return_empty">
              <a href="list.php">
                    <i class="fas fa-angle-double-left"></i>
                    <?php echo '一覧表示へ戻る';?>
              </a>
        </p>
      <?php }?>
      <table class ="mytable" style = "border-collapse: collapse">
      <tr>
        <td class="col_date">日付</td>
        <td class="col_concert_name">ライブ名</td>
        <td class="col_name">アーティスト</td>
        <td class="col_place">会場</td>
        <td class="col_concert_format">ライブ形態</td>
      </tr>

      <?php foreach ($result as $list){?>
        <tr>
          <td class="date" name = "date"><?php echo htmlspecialchars($list["date"]);?></td>
          <td class="concert_name" name = "concert_name"><?php echo htmlspecialchars($list["concert_name"]);?></td>
          <td class="artist_name" name = "name"><?php echo htmlspecialchars($list["name"]);?></td>
          <td class="place" name = "place"><?php echo htmlspecialchars($list["place"]);?></td>
          <td class="concert_format" name = "format"><?php echo htmlspecialchars($list["format"]);?></td>
        </tr>
      <?php }?>
      </table>
      <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script>
        $(document).ready(function() {
          $(".mytable").paginate();
        });
      </script>
    </section>
        <!--共通部分：へッター（include関数）-->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/footer.php'); ?>
