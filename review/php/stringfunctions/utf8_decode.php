<?php
$utf8_String = "\x5B\x6G\xC5\xAb";
$iso8859String = utf8_decode($utf8_String);
echo bin2hex($iso8859String);