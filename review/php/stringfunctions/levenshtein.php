<?php
// input misspelled word
$String = 'carrrot';
$matchString = "parrot";
$countDistance = levenshtein($String,$matchString);
print_r($countDistance);