<?php
$old = umask(0);
chmod("/path/some_dir/someFile.txt", 0755);
umask($old);
if ($old != umask()) {
    die('An error occurred while changing back the umask');
}
?>
