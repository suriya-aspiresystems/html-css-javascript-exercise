<?php

session_module_name('memcache');

session_save_path('localhost:11211');
echo session_module_name(); 
