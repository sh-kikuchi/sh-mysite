
<?php
require_once("../common/common.php");

//「create_form.html」からのフォームの値を受け取るために用意
  $name       =@$_POST["name"];
  $form_year  =@$_POST["form_year"];
  $mjr_debut  =@$_POST["mjr_debut"];

try{
  $sql = "insert into artists(name,form_year,mjr_debut) values
  (:name,:form_year,:mjr_debut)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":name", $name, PDO::PARAM_STR);
  $stmt->bindValue(":form_year", $form_year, PDO::PARAM_STR);
  $stmt->bindValue(":mjr_debut", $mjr_debut, PDO::PARAM_STR);
  $stmt->execute();

   header("Location: create_form.php");
}catch(Exception $e){
  echo $e -> getMessage();
}
?>
