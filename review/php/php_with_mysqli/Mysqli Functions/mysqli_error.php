
<?php
$link = mysqli_connect("localhost", "root", "Aspire@123", "test_database");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_query($link, "Set a=1")) {
    printf("Errorcode: %d\n", mysqli_error($link));
}

/* close connection */
mysqli_close($link);
?>
