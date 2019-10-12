<?php
  $recipient = "g@g4t.info";
  $fmtResponse= implode("", file("heart.html"));
  $fmtMail= implode("", file("mail.htt"));
  foreach($_POST as $key=> $val) {
    $fmtResponse= str_replace("<$key>", $val, $fmtResponse);
    $fmtMail= str_replace("<$key>", $val, $fmtMail);
  }
  if ($_POST["access"] == "irregeheim") {
    mail($recipient, $_POST["subject"], $fmtMail);
  }
  echo $fmtResponse;
 ?>
  