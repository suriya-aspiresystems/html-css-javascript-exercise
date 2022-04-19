<?php
if (false !== setlocale(LC_ALL, "en")) {
    $locale_info = localeconv();
    print_r($locale_info);
}
?>