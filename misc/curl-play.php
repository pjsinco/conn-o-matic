#!/usr/bin/env php
<?php

$ch = 
  curl_init("http://aoa-do.informz.net/aoa-do/data/images/connections/jaoa-flag-eab1.gif");

//curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$ret = curl_exec($ch);

//http://us2.php.net/manual/en/function.curl-getinfo.php
if (empty($ret)) {
  die(curl_error($ch));
  curl_close($ch);
} else {
  $info = curl_getinfo($ch);
  curl_close($ch);
}

echo $info['http_code'];

?>
