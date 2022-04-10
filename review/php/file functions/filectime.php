<?php

// checking last time a file was changed
echo filectime("file.txt");

// checking last time a file was changed
// and formatting the output of the date
echo "Last changed: ".date("F d Y H:i:s.",
        filectime("file.txt"));
?>