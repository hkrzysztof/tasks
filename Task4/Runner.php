<?php

class Runner
{
    public static $firstPlayerPoints = 0;
    public static $secondPlayerPoints = 0;
    public static $randomNumber;
    public static $resultString;

    public static function whoWins(){
        if(mt_rand(0,2) == 0){
            self::$firstPlayerPoints++;
         return 0;
        }else{
            self::$secondPlayerPoints++;
            return 1;
        }
    }

    public static function draw($firstPlayerPoints, $secondPlayerPoints, $randoms){
        if($firstPlayerPoints == $secondPlayerPoints) {
            echo $firstPlayerPoints.':'.$secondPlayerPoints;
            echo ' Deuce. Advance out.<br>';
        }
    }

    public static function advantageIn($firstPlayerPoints, $secondPlayerPoints, $randoms){
        if($firstPlayerPoints > $secondPlayerPoints) {
            echo $firstPlayerPoints.':'.$secondPlayerPoints;
            echo ' First player - Advance in.<br>';
        }
        if($firstPlayerPoints < $secondPlayerPoints) {
            echo $firstPlayerPoints.':'.$secondPlayerPoints;
            echo ' Second player - Advance in.<br>';
        }
    }

    public static function checkIfWins($firstPlayerPoints, $secondPlayerPoints, $randoms){
        if($firstPlayerPoints - $secondPlayerPoints > 1) {
            echo $firstPlayerPoints.':'.$secondPlayerPoints;
            echo ' First player wins.<br>';
            return 0;
        }
        if($secondPlayerPoints - $firstPlayerPoints > 1) {
            echo $firstPlayerPoints.':'.$secondPlayerPoints;
            echo ' Second player wins.<br>';
            return 1;
        }
        return 2;
    }

}