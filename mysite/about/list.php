<?php
  require_once("common.php");
  $sql  ="SELECT title,author,bk_year,press,comment FROM bk_review ORDER BY data_create;";
  $stmt = $pdo->query($sql); //PDOに備わっているquery機能を使って、1行目で設定した構文を使い、データを取り出す
  $result = $stmt->fetchALL(PDO::FETCH_ASSOC); //PHPの配列,連想配列の形式に変更
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/header.php'); ?>
  <section>
  <h1>個人情報の利用目的</h1>
  <p>当サイトでは、お問い合わせ等の際、名前やメールアドレス等の個人情報を入力いただく場合がございます。 取得した個人情報は、お問い合わせに対する回答や必要な情報を電子メールなどをでご連絡する場合に利用させていただくものであり、これらの目的以外では利用いたしません。</p>

  <h1>免責事項</h1>
  <p>当サイトからのリンクやバナーなどで移動したサイトで提供される情報、サービス等について一切の責任を負いません。また当サイトのコンテンツ・情報について、できる限り正確な情報を提供するように努めておりますが、正確性や安全性を保証するものではありません。当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。</p>

  <h1>著作権について</h1>
  <p>
  当サイトで掲載している文章や画像などにつきましては、無断転載することを禁止します。当サイトは著作権や肖像権の侵害を目的としたものではありません。著作権や肖像権に関して問題がございましたら、お問い合わせフォームよりご連絡ください。迅速に対応いたします。</p>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/footer.php'); ?>
