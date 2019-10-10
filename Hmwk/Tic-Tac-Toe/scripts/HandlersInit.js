/* 
    Created on : Sep 18, 2019, 6:28:09 PM
    Author     : Head First Javascript Example Project
 */

/* global controller, model */

// event handlers

function handleFireButton() {
    var guessInput = document.getElementById("guessInput");
    var guess = guessInput.value.toUpperCase();

    controller.processGuess(guess);

    guessInput.value = "";
}