<?php
$to = "roshansharma2u@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: hackerroshan0001@gmail.com" . "\r\n" .
"CC: roshansharma2u@gmail.com";

mail($to,$subject,$txt,$headers);
?>