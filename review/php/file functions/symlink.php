$target_pointer = "/home/user/someFile.txt";
        $link_name = 'mylink';
        $test = symlink($target_pointer, $link_name);
        if ($result) 
        {
          echo ("Symlink has been created!");
        }
        else 
        {
          echo ("Symlink cannot be created!");
        }
