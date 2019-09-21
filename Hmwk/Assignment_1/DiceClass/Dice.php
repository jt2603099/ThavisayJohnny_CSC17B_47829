<?php

define('maxRolls', 6);
define('minRolls', 0);

class Dice {

    private $name;
    private $rollNum = minRolls;
    private $picture;
    private $url;
    private $value;

    public function Dice($rollNum) {    

        if ($rollNum < maxRolls) {
            $this->rollNum = $rollNum;
            $this->setValue();
            $this->setName();
            $this->setPicture();
        }
        $rollNum++;
    }

    private function setName() {
        switch ($this->value) {
            case 1: 
                $this->name = "diceOne";
                break;
            case 2:
                $this->name = "diceTwo";
                break;
            case 3:
                $this->name = "diceThree";
                break;
            case 4:
                $this->name = "diceFour";
                break;
            case 5:
                $this->name = "diceFive";
                break;
            case 6:
                $this->name = "diceSix";
                break;
            default:
                $this->name = "Error";
                break;
        }
    }
    private function setPicture() {
        $this->picture = "dice-icons/" .$this->name. ".png";
    }

    private function setValue() {
        $this->value = (rand() % 6) + 1;
    }

    public function toHTML() {
        echo ("<img src=" .$this->picture." />");
        echo ("<br/>Roll #:  " .$this->rollNum);
        echo ("<br/>Value :  " .$this->value);
        echo "<br/><br/>";
    }
    
    public function getName(){return $this->name;}
    public function getrollNum(){return $this->rollNum;}
    public function getPicture(){return $this->picture;}
    public function getUrl(){return $this->url;}
    public function getMaxRolls(){return $this->maxRolls;}
}

?>