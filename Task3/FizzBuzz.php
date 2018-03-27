<?php

class FizzBuzz
{
    public static function result ($number){
        $result_array = array();
        for ($i = 1; $i <= $number; $i++) {

            if($i%3 == 0 && $i%5!=0){
                array_push($result_array, "fizz");
            }
            else if($i%5 == 0 && $i%3!=0){
                array_push($result_array, "buzz");
            }
            else if($i%5 == 0 && $i%3 == 0){
                array_push($result_array, "fizzbuzz");
            }
            else {

                array_push($result_array, $i);
            }

        }
        return $result_array;
    }
}