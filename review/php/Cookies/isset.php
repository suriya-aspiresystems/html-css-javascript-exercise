<?php

if(isset($_COOKIE["Name:"])){
    echo "Welcome ". $_COOKIE["Name:"];
    echo "<br>";
    echo "Age is: " . $_COOKIE["Age:"];
}
else{
  echo "Sorry Not Recognized";
  
}
