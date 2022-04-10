<?php

// changes the file group to administrator
$result = chgrp("somefile.txt","admin");
var_dump($result);
?>
