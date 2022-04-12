<?php
   function call_back_function($v1,$v2) {
      return $v1 . "-" . $v2;
   }
	
   $input = array("a"=>"banana","b"=>"apple","c"=>"orange");
   
   print_r(array_reduce($input, call_back_function));
   print_r("<br />");
   print_r(array_reduce($input, call_back_function, 10));
?> 
