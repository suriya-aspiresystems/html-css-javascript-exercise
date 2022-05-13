<?php
if(isset($_POST['submit'])){
    $allow = array("pdf" => "application/pdf" , "docx" => "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ,
        "txt" => "text/plain" , "jpg" =>"image/jpg" , "jpeg" =>"image/jpeg");
    $name = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];
    $extension = pathinfo($name , PATHINFO_EXTENSION);

    if(!array_key_exists($extension , $allow)){
        die("Please Select Valid File Format");
    }
    if(in_array($type , $allow)){
        if(file_exists("Desktop/".$_FILES["file"]["name"])){
            echo "This File Exists";
        }
        else{

            echo "Your File Was Uploaded Successfully";
        }
    }
    else{
        echo "File Cannot be Uploaded";
    }
}
?>