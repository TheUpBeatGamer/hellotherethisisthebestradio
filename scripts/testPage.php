<?php
$url = $_GET['page'];
$file = "../" . $url;
if (file_exists($file)) {
  echo 'true';
} else {
  echo 'error';
}
 ?>
