<?php
$String = "A Fine Morning with <b>Positive Vibes</b>";

echo htmlentities($String,ENT_QUOTES);

$str = "\x8F!!!";


echo htmlentities($str, ENT_QUOTES, "UTF-8");


echo htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8");
