<?php
  require_once("../common/common.php");
  $sql  ="SELECT title,author,bk_year,press,comment FROM bk_review ORDER BY data_create;";
  $stmt = $pdo->query($sql); //PDOに備わっているquery機能を使って、1行目で設定した構文を使い、データを取り出す
  $lists = $stmt->fetchALL(PDO::FETCH_ASSOC); //PHPの配列,連想配列の形式に変更
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/header.php'); ?>
<section id = "book-wrapper">
    <div class="header-title"> <span class="header-color"> </span> Book Review</div>
    <div>
        <a href="./review.php"><img class="book_img" src="../common/img/book/book_yoko.png"></a>
    </div>
        <div class="book-group">
            <?php foreach ($lists as $list){?>
              <div class="bk_content_wrap">
                <div class="bk_content">
                  <div class = "title"><p><?php echo htmlspecialchars($list["title"]);?></p></div>
                  <div class = "info">
                    <p><?php echo htmlspecialchars($list["author"]);?></p>
                    <p><?php echo htmlspecialchars($list["press"])." ".htmlspecialchars($list["bk_year"]."年");?> </p>
                  </div>
                  <div class = "text">
                    <p><?php echo htmlspecialchars($list["comment"]);?></p>
                  </div>
                </div>
              </div>
            <?php }?>
        </div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/footer.php'); ?>
