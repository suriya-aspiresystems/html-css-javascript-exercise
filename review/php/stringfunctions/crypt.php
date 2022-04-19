<?php
//2 character salt

if(CRYPT_BLOWFISH == 1){
    echo "Standard DES :", crypt("suriya","su");
    echo "<br>";
}
else{
    echo "Not Supported";
}

//4 character salt
if(CRYPT_EXT_DES == 1){
    echo "Standard DES :", crypt("suriya","sunara");
    echo "<br>";
}
else{
    echo "Not Supported";
}
// 16 character
if(CRYPT_SHA256 == 1){
    echo "Standard DES :", crypt("suriya","su");
    echo "<br>";
}
else{
    echo "Not Supported";
}

if(CRYPT_STD_DES){
    echo "Standard DES :", crypt("suriya","sujkf");
    echo "<br>";
}
else{
    echo "Not Supported";
}
