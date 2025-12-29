<?php 


class Validator{
    public static function string($value,$mi=1 ,$max=INF){
       $value=trim($value);

       return strlen($value) >= $mi && strlen($value)<= $max;

    }
    public static  function email($value){
      return  filter_var($value,FILTER_VALIDATE_EMAIL);
    }

}