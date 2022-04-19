<?php
$currency = 123455.55;
setlocale(LC_MONETARY,'en_US');
echo money_format('%i',$currency);