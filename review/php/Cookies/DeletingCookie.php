<?php
if(isset($_COOKIE["Name:"] )&&isset($_COOKIE["Age:"])){
    setcookie("Name:", "", time() - 60);
    setcookie("Age:", "", time() - 60);
}

