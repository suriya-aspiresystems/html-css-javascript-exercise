<?php

// Read and write permission to owner
$result = chmod("somefile.txt", 0600);
var_dump($result);
?>