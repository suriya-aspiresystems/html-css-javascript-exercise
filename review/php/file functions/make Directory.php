<?php
$nest = './node1/node2/node3/';
// creating a nested structure directory
if (!mkdir($nest, 0777, true))
{
    echo('Folders cannot be created recursively');
}
else
{
    echo('Folders created recursively');
}
?>