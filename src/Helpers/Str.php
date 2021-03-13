<?php 


namespace PhpSee\Helpers ; 

 class Str { 


    public static function sayHello() : string{

        return sprintf("hello word"); 
    }

    

    public static function randomString(int $length = 20 , bool $symbol=true,bool $maj=true){

        $a_pattern='abcdefghijklmnopqrstuvwxyz';
        $a_maj="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $a_symb="#{[|``\^@]}-_*/!,;";

        if($symbol)$a_pattern.=$a_symb;
        if($maj) $a_pattern.=$a_maj;
        
        return str_shuffle(substr($a_pattern,0,$length  -1 )); 

    }



}
