<?php

// checking last accessed time of a file
echo fileatime("file.txt");

//checking last accessed time of a file
// and formatting the output of the date
echo "Last accessed: ".date("F d Y H:i:s.",
        fileatime("file.txt"));
?>