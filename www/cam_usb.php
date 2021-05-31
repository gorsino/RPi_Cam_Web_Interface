<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: image/jpeg");
   if (isset($_GET["pDelay"]))
   {
      $preview_delay = $_GET["pDelay"];
   } else {
      $preview_delay = 10000;
   }
   file_get_contents("http://localhost:2082/1/action/snapshot");
   readfile("/var/lib/motion/snapshot.jpg");
?>
