let minRolls = 0;

function Dice(maxRolls) {
    if (minRolls <= maxRolls) {
            this.rollNum = minRolls;
            this.setValue();
            this.setName();
            this.setPicture();
        minRolls++;
       }
}

Dice.prototype.setName=function() {
    switch (this.value) {
        case 1: 
            this.name = "diceOne";
            break;
        case 2:
            this.name = "diceTwo";
            break;
        case 3:
            this.name = "diceThree";
            break;
        case 4:
            this.name = "diceFour";
            break;
        case 5:
            this.name = "diceFive";
            break;
        case 6:
            this.name = "diceSix";
            break;
        default:
            this.name = "Error";
            break;
    }
};

Dice.prototype.setPicture=function() {
    this.picture = "dice-icons/" + this.name + ".png";
};

Dice.prototype.setValue=function() {
    this.value = (Math.floor(Math.random() * 6) + 1);
};

Dice.prototype.toString=function() {
    document.write("<img src=  " + this.picture + " />");
    document.write("<br/>Roll #:  " + this.rollNum);
    document.write("<br/>Value :  " + this.value);
    document.write("<br/><br/>");
};