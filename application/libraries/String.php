<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class String {

    function blankToNull($string){
        if(!empty($string) || $string!='' ){
            return $string;
        }else{
            return NULL;
        }
    }

   
}
?>
