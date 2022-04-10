<?php
echo substr(sprintf("%o",fileperms("file.txt")),-4);