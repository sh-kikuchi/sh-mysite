
<?php
require_once("../common/common.php");

//「create_form.html」からのフォームの値を受け取るために用意
var_dump($_POST["artist_id"]);
  $artist_id      =@$_POST["artist_id"]; //artist_id
  $concert_name   =@$_POST["concert_name"];
  $date           =@$_POST["date"];
  $format =@$_POST["format"];
  $place    =@$_POST["place"];

try{
  $sql = "insert into concerts(artist_id,concert_name,date,format,place) values
  (:artist_id,:concert_name,:date,:format,:place)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":artist_id", $artist_id, PDO::PARAM_STR);
  $stmt->bindValue(":concert_name", $concert_name, PDO::PARAM_STR);
  $stmt->bindValue(":date", $date, PDO::PARAM_STR);
  $stmt->bindValue(":format", $format, PDO::PARAM_STR);
  $stmt->bindValue(":place", $place, PDO::PARAM_STR);

  $stmt->execute();

 header("Location: list.php");

}catch(Exception $e){
  echo $e -> getMessage();
}
?>
