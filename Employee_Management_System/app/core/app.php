<?php

class App
{
   function __construct()
   {
      $url = $this-> splitURL();

   }
   private function splitURL()
   {
      return explode("/" , trim($_GET['url'] ,"/"));
   }
}
