<?php
    start_session();
    $_SESSION["A"] = "Some New Value";  // set new value

    session_reset();  // old session value restored
    echo $_SESSION["A"];

    //Output: Some Value
?>

