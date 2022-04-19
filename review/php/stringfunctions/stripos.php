<?php
$searchableString  = 'C';
$string1 = 'xyzC';
$string2 = 'ABC';

$pos1 = stripos($string1, $searchableString );
$pos2 = stripos($string2, $searchableString);

// Nope, 'a' is certainly not in 'xyz'
if ($pos1 === false) {
    echo "The string '$searchableString' was not found in the string '$string1'";
}

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' is the 0th (first) character.
if ($pos2 !== false) {
    echo "We found '$searchableString' in '$string2' at position $pos2";
}
?>