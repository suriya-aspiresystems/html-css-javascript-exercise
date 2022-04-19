<?php
$email  = 'name@example.com';
$domain = strstr($email, '@',true);
echo $domain; // prints @example.com
