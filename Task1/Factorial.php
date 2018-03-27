<?php

class Factorial
{
    static $result = 1;

    public static function result ($number){
        for($i=$number; $i>0; $i-- ){
            self::$result = self::$result * $i;
        }
        return self::$result;
    }
}