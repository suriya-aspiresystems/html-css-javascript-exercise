<?php

$myfile = "gfg.exe";

// checking whether the file is
// an executable file or not
if (is_executable($myfile))
    echo("$myfile: executable!");
else
    echo("$myfile: not executable!");

