
<?php
// Example usage for: Null Coalesce Operator
$action = $_POST['action'] ?? 'default';

// The above is identical to this if/else statement
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'default';
}

echo "Your Username is: ".$_GET["username"];
echo "<br>";
echo "Your Blood Group:".$_GET["bloodgroup"];
?>