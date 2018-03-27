<?php

class PrimeFactors
{
    public static function result($number){
        $factors = array();
        for ($i = 2; $i <= $number; $i++){
            while ($number % $i == 0){
                array_push($factors, $i);
                $number /= $i;
            }
        }
        return $factors;
    }
}