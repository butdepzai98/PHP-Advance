<?php   

class ConNguoi  
{  
    private static $name = 'ConNguoi';  

    public function __construct()  
    {  

    }  

    public static function getName()  

    {  
        echo static::$name;  
    }  

}