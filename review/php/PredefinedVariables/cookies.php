<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named " . $cookie_name . " is not set!";
    echo "<br>";
} else {
    echo "Cookie ". $cookie_name."Cookie Value ".$cookie_value;

}
?>
