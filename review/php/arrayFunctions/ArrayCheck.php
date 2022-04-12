<?php
   $mobile_os = array("Mac", "android", "java", "Linux");
   
   if (in_array("java", $mobile_os)) {
      echo "Got java";
   }
   
   if (in_array("mac", $mobile_os)) {
      echo "Got mac";
   }
?> 
