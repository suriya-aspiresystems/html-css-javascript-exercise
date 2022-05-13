<?php
//Starting the session
session_start();
$id = session_create_id();
print("Id: ".$id);
?>