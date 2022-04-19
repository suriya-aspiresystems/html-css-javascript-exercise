<?php


$encoded = quoted_printable_encode('Suriya');

var_dump($encoded);
var_dump(quoted_printable_decode($encoded));