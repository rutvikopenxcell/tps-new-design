<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateUniqueIdController extends Controller
{
    public static function uniqueReference($len=6, $timestr=4, $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'){
       if($timestr>=8 || $timestr<=-8) $timestr=8;       
        $uniqueString = '';
        for ($i = 0; $i < $len; $i++){
          $pos = rand(0, strlen($chars)-1);
          $uniqueString .= $chars{$pos};
         }     
         $uniqueString .=substr(strtotime("now"),-$timestr);      
        return $uniqueString;
      }
}
