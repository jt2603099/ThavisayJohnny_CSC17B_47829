/* 
    Created on : Sep 18, 2019, 6:28:09 PM
    Author     : Head First Javascript Example Project
 */


var view = {
    displayX: function(location) {
        var cell = document.getElementById(location);
        cell.setAttribute("class", "hit");
    },

    displayO: function(location) {
        var cell = document.getElementById(location);
        cell.setAttribute("class", "miss");
    }

}; 