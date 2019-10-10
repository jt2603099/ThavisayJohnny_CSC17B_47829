/*
 * Author:      Dr. Mark E. Lehr
 * Purpose:     Survey class
 */

//Constructor for the Survey
function Survey(name,description,quesNum) {
    var numOfArgs = arguments.length;

    if (numOfArgs === 0 || numOfArgs > 3) {
        this.name = "";
        this.description = "";
    } else if (numOfArgs === 3) {
        this.name = name;
        this.description = description;
        this.questNum = quesNum;
    } else if (numOfArgs == 2) {
        this.name = name;
        this.description = description;
    } else {
        this.name = this.name;
        this.description = this.description;
        this.questNum = this.quesNum;
    }
    
    this.setName = function(name) {
        this.name = name;
    }

    this.setDescription = function(description) {
        this.description = description;
    }

    this.addQuestions = function(questNum) {
        this.questNum.push(questNum);
    }

    this.getName = function() {
        return this.name
    }

    this.getDescription = function() {
        return this.description;
    }

    this.getQuestions = function(number) {
        if (number >= 0 && number < this.questNum.length) {
            return this.questNum[number];
        } else {
            return "This is not a question";
        }
    }

    this.setObj = function(key, obj) {
      localStorage.setItem(key, JSON.stringify(obj))
    }

    this.getObj = function(key) {
      JSON.parse(this.getItem(key));
    }

    Survey.prototype.displayForm = function() {
        document.write("<object data=\"index.html\">");
    }

    this.display = function(key) {
      var surveys = [];

      surveys.push(this);
      this.setObj(key, surveys);

      //var obj = JSON.parse(key);
      console.log(surveys);

        document.write("<p>" + this.description + "</p>");
        for (var i = 0; i < this.questNum.length; i++) {
            if (this.questNum[i].length > 0) {
            document.write(this.questNum[i] + '<input type=radio name=' +this.name+ " value= " +this.questNum[i].replace(/\s/g, '')+  "> <br>");
                // for (i in obj) {
                //   document.write(obj.questNum[i]+ "<br> </br>")
                // }
            }
        }
    }
};