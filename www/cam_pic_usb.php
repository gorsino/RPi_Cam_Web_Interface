<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: image/jpeg");
  readfile("/var/lib/motion//snapshot.jpg");