<?php


namespace App\Utilities;

class Ipconfig{
    
   public function ipadress(){

   	    //$ip='154.68.45.82:1521';
         $ip=env('APP_URL');
   	    return $ip;
   }

  
}