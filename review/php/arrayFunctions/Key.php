<?php
   $fruit = array(
      'f1' => 'apple',
      'f2' => 'orange',
      'f3' => 'grape',
      'f4' => 'apple',
      'f5' => 'apple');
      
   while ($f_name = current($fruit)) {
      if ($f_name == 'apple') {
         echo key($fruit)."\n";
      }
      next($fruit);
   }
?>
