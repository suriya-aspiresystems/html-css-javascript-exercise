$old_name = "someFile.txt" ; 
$new_name = "newsomeFile.txt" ; 
   

if(file_exists($new_name))
 { 
   echo "Error While Renaming $old_name" ;
 }
else
 {
   if(rename( $old_name, $new_name))
     { 
        echo "Successfully Renamed $old_name to $new_name" ;
     }
     else
     {
        echo "A File With The Same Name Already Exists" ;
     }
  }
?>
