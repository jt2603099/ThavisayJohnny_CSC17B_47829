<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Compound Interest Calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include '.PHPLabTableGeneration.php';?>
        <style>
            div {
                display: table-row;
            }
            label, input {
                display: table-cell;
            }
        </style>
    </head>
    <body>
        <h1>Compound Interest Calculator</h1>

        <div><label>Loan amount: </label><input id="L" value="3000"></div>
        <div><label>Interest rate: </label><input id="i" value="6.5"></div>
        <div><label>Number of months: </label><input id="n" value="18"></div>
        
        <div id="results"></div>
        <button onclick="getElementById('results').innerHTML=display()">Calculate</button>
      
    </body>
</html>
