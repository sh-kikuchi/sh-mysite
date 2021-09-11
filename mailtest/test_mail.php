<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = 'shu94hist726@gmail.com';
  $title = $_POST['title'];
  $message = $_POST['message']. "\r\n" .$_POST['content'];
  $headers =  $_POST['email'];

  if(mb_send_mail($to, $title, $message, $headers))
  {
    echo "メール送信しました。";
  }
  else
  {
    echo "メール送信失敗しました。";
  }
 ?>
</body>
</html>
