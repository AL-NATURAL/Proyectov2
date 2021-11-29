<?php

class DataBase{
    private static $objcon=NULL;
    public static function createobj(){ 
        if(!isset(self::$objcon)){
            $opcPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$objcon=new PDO('mysql:host=localhost;dbname=alnaturalbd','root','',$opcPDO);
        }return self::$objcon; 
    }
}
?>
