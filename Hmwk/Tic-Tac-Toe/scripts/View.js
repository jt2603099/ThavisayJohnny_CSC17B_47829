/* 
    Created on : Sep 18, 2019, 6:28:09 PM
    Author     : Head First Javascript Example Project
 */


var view = {    
    displayShape: function(cellId, shapeText) {
        //debugger;
        var tableCell = document.getElementById(cellId);
        //tableCell.setAttribute("src", urlOfShape);
        tableCell.innerText = shapeText;
    },
    displayMessage: function(msg) {
        var msgArea = document.getElementById("messageArea");
        msgArea.innerHTML = msg;
    }
};