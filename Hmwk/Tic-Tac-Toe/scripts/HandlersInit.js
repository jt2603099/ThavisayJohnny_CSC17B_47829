/* 
    Created on : Sep 18, 2019, 6:28:09 PM
    Author     : Head First Javascript Example Project
 */

/* global controller, model */

// event handlers

var eventListeners = {
  onClickListener: function() {
    var tableRow = document.querySelector('table');
    
    tableRow.addEventListener('click', function(e) {
        var elementClicked = e.target;
        console.log(parseInt(elementClicked.id));
        if (elementClicked.tagName === 'TD') {
            controller.setShape(parseInt(elementClicked.id));
        }
        controller.processWinner();
    });
  }
};
eventListeners.onClickListener();