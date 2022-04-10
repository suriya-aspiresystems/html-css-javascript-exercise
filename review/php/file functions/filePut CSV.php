<?php
// Sample data for formatting in CSV format
$employees = array("Raj, Singh, Developer, Mumbai",
    "Sameer, Pandey, Tester, Bangalore",
    "Raghav, Chauhan, Manager, Delhi");

$myfile = fopen("data.csv", "w");

foreach ($employees as $line)
{
    fputcsv($myfile, explode(',',$line));
}

// closing the file
fclose($myfile);
?>