<?php
  $recipient = "comrade@telecommunistes.net,comrade@telekommunisten.net";
  $fmtResponse= implode("", file("star.html"));
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
  