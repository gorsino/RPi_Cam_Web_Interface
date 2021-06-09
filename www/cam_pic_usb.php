<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: image/jpeg");
  readfile("/dev/shm/mjpeg/snapshot.jpg");