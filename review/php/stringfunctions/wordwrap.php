<?php
$text = "Suriya Narayan is working as a intern in Aspire Systems";
$newText = wordwrap($text,5,"<br>" , true);
echo $newText;