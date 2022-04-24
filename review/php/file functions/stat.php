<?php
$test = stat('gfg.txt');
//using stat() along with name index to display access time
echo 'Access time: ' .$test['atime'];
  
//using stat() along with name index  to display modification time
echo '<br />Modification time: ' .$test['mtime'];
  
//using stat() along with name index  to display device number
echo '<br />Device number: ' .$test['dev'];
?>
