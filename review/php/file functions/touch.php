<?php
$file_pointer = "someFile.txt";
if (touch($file_pointer)) 
{
   echo ("$file_pointer modification time has been set to current system time.");
} 
else 
{
   echo ("$file_pointer modification time cannot be changed.");
}
  
?>
