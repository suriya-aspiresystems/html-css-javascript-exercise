<?php

// checking last time the contents of
// a file were changed and formatting
// the output of the date
echo "Last modified: ".date("F d Y H:i:s.",
        filemtime("file.txt"));
?>