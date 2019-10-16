/* 
    Created on : Sep 18, 2019, 6:28:09 PM
    Author     : Head First Javascript Example Project
 */


/* global model, view */

var controller = {
    setShape: function(cellId) {
        //debugger;
        if (model.userOneTurn) {
          //document.getElementById(cellId).src = model.userOne.shapeUrl;
          view.displayShape(cellId, 'X');
        } else {
          //document.getElementById(cellId).src = model.userTwo.shapeUrl;
          view.displayShape(cellId, 'O');
        }
        model.userOneTurn = !model.userOneTurn;
    },
    processWinner: function() {
    // Check Horizontal 3
    if ((document.getElementById("0").innerHTML && document.getElementById("1").innerHTML && document.getElementById("2").innerHTML) === 'X' || 
        (document.getElementById("3").innerHTML && document.getElementById("4").innerHTML && document.getElementById("5").innerHTML) === 'X' ||
        (document.getElementById("6").innerHTML && document.getElementById("7").innerHTML && document.getElementById("8").innerHTML) === 'X') {
            view.displayMessage("Player 1 Wins!");
    } else if ((document.getElementById("0").innerHTML && document.getElementById("1").innerHTML && document.getElementById("2").innerHTML) === 'O' || 
                (document.getElementById("3").innerHTML && document.getElementById("4").innerHTML && document.getElementById("5").innerHTML) === 'O' ||
                (document.getElementById("6").innerHTML && document.getElementById("7").innerHTML && document.getElementById("8").innerHTML) === 'O') {
                    view.displayMessage("Player 2 Wins!");
    // Check Vertical 3s
    } else if ((document.getElementById("0").innerHTML && document.getElementById("3").innerHTML && document.getElementById("6").innerHTML) === 'X' || 
                (document.getElementById("1").innerHTML && document.getElementById("4").innerHTML && document.getElementById("7").innerHTML) === 'X' ||
                (document.getElementById("2").innerHTML && document.getElementById("5").innerHTML && document.getElementById("8").innerHTML) === 'X') {
                    view.displayMessage("Player 1 Wins!");
    } else if ((document.getElementById("0").innerHTML && document.getElementById("3").innerHTML && document.getElementById("6").innerHTML) === 'O' || 
                (document.getElementById("1").innerHTML && document.getElementById("4").innerHTML && document.getElementById("7").innerHTML) === 'O' ||
                (document.getElementById("2").innerHTML && document.getElementById("5").innerHTML && document.getElementById("8").innerHTML) === 'O') {
                    view.displayMessage("Player 2 Wins!");
    // Check Diagonal 3s
    } else if ((document.getElementById("0").innerHTML && document.getElementById("4").innerHTML && document.getElementById("8").innerHTML) === 'X' || 
                (document.getElementById("2").innerHTML && document.getElementById("4").innerHTML && document.getElementById("6").innerHTML) === 'X') {
                    view.displayMessage("Player 1 Wins!");
    } else if ((document.getElementById("0").innerHTML && document.getElementById("4").innerHTML && document.getElementById("8").innerHTML) === 'O' || 
                (document.getElementById("2").innerHTML && document.getElementById("4").innerHTML && document.getElementById("6").innerHTML) === 'O') {
                    view.displayMessage("Player 2 Wins!");
                } //else {
    //     view.displayMessage("It's a tie.");
    // }
    
    // Otherwise it's a tie
    
    // If there is a winner, reset to first player's turn
    model.userOneTurn = true;
    view.displayMessage = "";
    }   
};