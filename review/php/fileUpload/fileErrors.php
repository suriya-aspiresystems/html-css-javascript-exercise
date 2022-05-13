<?php

$target_dir = $_POST["directory_name"]."/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$name = $_FILES["file"]["name"];
$type = $_FILES["file"]["type"];
$size = $_FILES["file"]["size"];
$flag = 1;

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(!empty($_POST["directory_name"]))
    {

        if(!is_dir($_POST["directory_name"])) {

            echo "Creating Directory ..!!";
            mkdir($_POST["directory_name"]);
            $flag = 1;
        }
    }
    else
    {

        echo "<b>Error: Specify the directory name...</b>";
        $flag = 0;
        exit;
    }

    // Check if file was uploaded without errors
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0)
    {
        $allowed_ext = array("jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "png" => "image/png");

        // Verify file extension
        $ext = pathinfo($name, PATHINFO_EXTENSION);

        if (!array_key_exists($ext, $allowed_ext))
        {
            die("<b>Error: Please select a valid file format.</b>");
        }

        $maxsize = 200000;

        if ($size > $maxsize)
        {
            die("<b>Error: ". $_FILES["file"]["error"] .
                "  File size is larger than the allowed limit.</b>");
        }


        // Verify MYME type of the file
        if (in_array($type, $allowed_ext))
        {
            // Check whether file exists before uploading it
            if (file_exists("$target_dir/".$_FILES["file"]["name"]))
            {
                echo "<b>".$_FILES["file"]["name"]." is already exists.</b>";
            }
            else
            {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

                    echo "<b>The ".  $_FILES["file"]["name"]. " has been uploaded.</b>";

                }
                else
                {
                    echo "<b>Error : ". $_FILES["file"]["error"] .
                        " Sorry, there was an error uploading your file.";
                }
            }
        }
        else
        {
            echo "<b>Error: ". $_FILES["file"]["error"] . " Please try again.</b>";
        }
    }
    else
    {
        echo "<b>Error: ". $_FILES["file"]["error"] . " File is not uploaded</b>";
    }
}
?>