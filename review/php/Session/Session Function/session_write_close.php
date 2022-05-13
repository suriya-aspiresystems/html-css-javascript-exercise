<?php  	
         //Starting a session	  
         session_start();   
         //Replacing the old value
         $_SESSION["A"] = "Hello"; 	 
         print("Value of the session array: ");
         print_r($_SESSION);
         //Closing the session
         session_write_close();
         echo "<br>";
         print("Value: ".$_SESSION["A"]);
      ?>
