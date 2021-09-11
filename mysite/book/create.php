
<?php
require_once("../common/common.php");

  $nickname   =$_POST["nickname"];
  $author     =$_POST["author"];
  $bk_title   =$_POST["bk_title"];
  $bk_year    =$_POST["bk_year"];
  $press      =$_POST["press"];
  $comment    =$_POST["comment"];

try{
  $sql = "INSERT into `bk_review` (`nickname`,`author`,`title`,`bk_year`,`press`,`comment`) values(:nickname,:author,:bk_title,:bk_year,:press,:comment)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":nickname", $nickname, PDO::PARAM_STR);
  $stmt->bindValue(":author", $author, PDO::PARAM_STR);
  $stmt->bindValue(":bk_title", $bk_title, PDO::PARAM_STR);
  $stmt->bindValue(":bk_year", $bk_year, PDO::PARAM_STR);
  $stmt->bindValue(":press", $press, PDO::PARAM_STR);
  $stmt->bindValue(":comment", $comment, PDO::PARAM_STR);

$stmt->execute();
  //このファイルはブラウザでは表示されないもの。
  //PDOでのやり取りが終わった最後にheader関数を使って、「list.php」に
  header("Location:list.php");

}catch(Exception $e){
  echo $e -> getMessage();
}
?>
