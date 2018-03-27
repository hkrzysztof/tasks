<?php

class Bowling
{
    private $rolls = [];
    private $currentRoll = 0;

    public function roll($pins){
        $this->rolls[$this->currentRoll++] = $pins;
    }

    private function sumOfBowlsInFrame($frameIndex){
        return $this->rolls[$frameIndex] + $this->rolls[$frameIndex +1];
    }

    private function isSpare($frameIndex){
        return $this->rolls[$frameIndex] + $this->rolls[$frameIndex +1] == 10;
    }

    private function spareBonus($frameIndex){
        return $this->rolls[$frameIndex + 2];
    }

    private function isStrike($frameIndex){
        return $this->rolls[$frameIndex] == 10;
    }

    private function strikeBonus($frameIndex){
        return $this->rolls[$frameIndex + 1] + $this->rolls[$frameIndex + 2];
    }

    public function getScore(){
        $score = 0;
        $frameIndex = 0;
        $roundscore = 0;

        for($frame=0; $frame<10; $frame++){
            if($this->isStrike($frameIndex)){
                $score += 10 + $this->strikeBonus($frameIndex);
                $roundscore = 10 + $this->strikeBonus($frameIndex);
                $frameIndex++;
            } else if ($this->isSpare($frameIndex)) {
                $score += 10 + $this->spareBonus($frameIndex);
                $roundscore = 10 + $this->spareBonus($frameIndex);
                $frameIndex += 2;
            } else {
                $score += $this->sumOfBowlsInFrame($frameIndex);
                $roundscore = $this->sumOfBowlsInFrame($frameIndex);
                $frameIndex += 2;
            }
            echo 'Round '.($frame + 1).' score: '.$roundscore;
            echo '<br>';
            echo 'Total Score: '.$score;
            echo '<br>';
        }
        return $score;
    }

    public function generate(){
        for($i=0; $i<21; $i++){
            if($i%2 == 0){
                $this->rolls[$i]= mt_rand(0, 10);
            }
            if($i%2 == 1){
                if ($this->rolls[$i-1] == 10){
                    $this->rolls[$i] = -1;
                }
                if ($this->rolls[$i-1] != 10){
                    $this->rolls[$i] =  mt_rand(0, ($this->rolls[$i-1]));
                }
            }
        }
    }

    public function removePlaceholder(){
        for ($i=0; $i<21; $i++){
            if($this->rolls[$i] == -1){
                for ($j = $i; $j<20; $j++){
                    $this->rolls[$j] = $this->rolls[$j+1];
                }
            }
        }
    }


}