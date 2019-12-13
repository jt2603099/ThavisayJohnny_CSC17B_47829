<?php

class ViewSurvey extends Survey {

    public function showAllSurveys() { 
        $datas = $this->getAllSurveys();

            echo    '<table class="product-table" style="color: black";>';
            echo    '<tr class="product-row"> </tr>
                     <th class="product-row-header"></th>
                     <th class="product-row-header">ID</th>
                     <th class="product-row-header">Survey Name</th>
                     <th class="product-row-header">Choice 1</th>
                     <th class="product-row-header">Choice 2</th>
                     <th class="product-row-header">Choice 3</th>
                     <th class="product-row-header">Updated</th>';

        foreach ($datas as $data) {
            echo '<tr class="product-row product-item">';

                echo '<td class="product-item-name"><a href="survey.php?id=' . $data['id']. '"><button>E</button>';              
                echo '<td class="product-item-name" style="text-align: center;">' . $data['id'] . '</td>';
                echo '<td class="product-item-name">' . $data['Name'] . '</td>';
                echo '<td class="product-item-name">' . $data['Answer_1'] . '</td>';
                echo '<td class="product-item-name">' . $data['Answer_2'] . '</td>';
                echo '<td class="product-item-name" style="text-align: center;">' . $data['Answer_3'] . '</td>';
                echo '<td class="product-item-name">' . $data['Updated'] . '</td>';


            echo '</tr>';
        }
    }

    public function showSurvey($query_id) {
        $datas = $this->getASurvey($query_id);
        foreach ($datas as $data) {

            echo '<form class="form signpup-form" action="Database/Scripts/editsurvey.scr.php" method="post">';
                echo '<input type="text" name="sid" style="display: none;" value=' .$query_id. '>';
                echo '<label class="signup-input">Survey</tr><input class="input signup-input" type="text" name="newsurveyname" value="' .$data['Name']. '">';
                echo '<label class="signup-input">Choice 1</label><input class="input signup-input" type="text" name="nschoice1" value="' .$data['Answer_1']. '">';
                echo '<label class="signup-input">Choice 2</label><input class="input signup-input" type="text" name="nschoice2" value="' .$data['Answer_2']. '">';
                echo '<label class="signup-input">Choice 3</label><input class="input signup-input" type="text" name="nschoice3" value="' .$data['Answer_3']. '">';
                echo  '<button class="btn btn-primary signup-input type="submit" name="editsurvey-submit">Submit</submit>';
            echo '</form>';
        }
    }

    public function listSurveys() {
        $datas = $this->getAllSurveys();

        foreach ($datas as $data) {
             
                echo '<p class="product-item-name">' . $data['Name'] . '</td>';
                echo '<input type="radio" class="product-item-name">' . $data['Answer_1'] . '</td>';
                echo '<input type="radio" class="product-item-name">' . $data['Answer_2'] . '</td>';
                echo '<input type="radio" class="product-item-name">' . $data['Answer_3'] . '</td>';
                echo '<button class="btn btn-primary" type="submit" name="surveyresults-submit" style="margin-left: 15px;">Submit</button>';
                echo '<hr>';
        }
    }

    public function addSurvey($a, $b, $c, $d) {
        $sql = "INSERT INTO `jthavisay_survey`.`survey` (`Name`, `Answer_1`, `Answer_2`, `Answer_3`) VALUES ('$a', '$b', '$c', '$d');";
        mysqli_stmt_execute($sql);

    }
}
?>