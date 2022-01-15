<?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/header.php'); ?>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = 'shu94hist726@gmail.com';
  $title = $_POST['option']."(".$_POST['username'].")";
  $message = $_POST['comment'];
  $headers =  $_POST['mail'];

  $result = mb_send_mail($to, $title, $message, $headers);

  //送信結果を判定
   if($result){
     echo json_encode(array('result' => true));
   }else{
     echo json_encode(array('result' => false));
   };

  //フォームに空の項目がありエラー
  echo json_encode(array('result' => false));
 ?>
