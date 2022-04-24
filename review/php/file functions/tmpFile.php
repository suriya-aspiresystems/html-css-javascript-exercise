<?php
// PHP program to illustrate tmpfile( ) Function
 
$temp_pointer = tmpfile();
 
// Write on temporary file
fwrite($temp_pointer, 'temporary data');
 
// This removes the file
fclose(temp_pointer);
 
?>
