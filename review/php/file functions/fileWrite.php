<?php
$File = fopen("file.txt" , "w");

echo fwrite($File, "Aspire");
fclose($File);