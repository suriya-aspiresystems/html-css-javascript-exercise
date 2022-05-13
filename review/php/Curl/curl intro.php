<?php
$c = curl_init();
curl_setopt($c, CURLOPT_URL, $c);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_POSTFIELDS,true);
$result = curl_exec($c);
if (curl_exec($c) === false) {
echo "ok";
} else {
echo "error";
}
curl_close($c);