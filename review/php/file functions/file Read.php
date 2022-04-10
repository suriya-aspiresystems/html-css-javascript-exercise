<?php
 $myFile = fopen("file.txt" , 'r');
 echo fread($myFile , "5");
 fclose($myFile);