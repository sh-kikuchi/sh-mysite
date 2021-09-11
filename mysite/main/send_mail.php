<?php include($_SERVER['DOCUMENT_ROOT'].'/mysite/common/header.php'); ?>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = 'shu94hist726@gmail.com';
  $title = $_POST['option']."(".$_POST['name'].")";
  $message = $_POST['comment'];
  $headers =  $_POST['mail'];

  if(mb_send_mail($to, $title, $message, $headers))
  {
    echo "メール送信しました。";
  }
  else
  {
    echo "メール送信失敗しました。";
  }
 ?>
