<?php 

function __autoload($className)  
{  
    //kiểm tra xem file tồn tại không  

    if(file_exists($className . '.php')){  

        //Nếu tồn tại thì nhúng file vào.  

        include_once $className . '.php';  
    }  
}

ConNguoi::getName();  