<?php

$myLink= "gfg";

// checking whether the file is a symbolic link or not
if (is_link($myLink)) {
    echo ("$myLink is a symbolic link!");
} else {
    echo ("$myLink is not a symbolic link!");
}

?>