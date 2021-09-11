
<?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/header.php'); ?>
    <a class = "toList" href="./list.php">リスト一覧へ</a>
    <form id="book_review" action="create.php" method="POST">
        <div class="items nickname">
            <label>ニックネーム</label>
            <input type="text" name="nickname" class="txt nick_nm" placeholder="あなたのニックネームを入力して下さい">
        </div>
        <div class="items author">
           <label>著者名（氏と名の間は半角空けてください。）</label>
           <input type="text" name="author" class="txt author_nm" placeholder="著者名を入力してください。">
        </div>
        <div class="items bk_title">
          <label>著書</label>
          <input type="text" name="bk_title" class="txt book_nm" placeholder="著書を入力してください。">
        </div>
        <div class="items press">
          <label>出版社</label>
          <input type="text" name="press" class="txt press" placeholder="ABC出版　文庫の時はABC文庫">
        </div>
        <div class="items bk_year">
          <label>出版年</label>
          <input type="text" name="bk_year" class="txt book_yr" placeholder="例:2020年">
        </div>
        <div class="items bk_txt">
          <label>感想（400字以内）</label>
          <textarea name="comment" class="txt bk_txt" cols="40" rows="10" placeholder="思ったこと、考えたことなど何でも"></textarea>
        </div>
        <div class="items submit">
          <input type="submit" class="form-button" value="送信">
        </div>
    </form>
<?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/footer.php'); ?>
