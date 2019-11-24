<?php

//Create a connection to the database

//DB, UN, Pass, DB
        $servername = "209.129.8.7";
        $username = "47697";
        $password = "cis17b47697";
        $dbname = "47697";
		$conn=mysqli_connect($servername, $username, $password, $dbname);
// Query the database
        $query= "SELECT `entity_assignment`.`name` AS `Assignment`, `entity_student`.`name` AS `Student`, `entity_student`.`student_id` AS `Student ID` 
                 FROM `entity_gradebook`.`entity_assignment` AS `entity_assignment`, `entity_gradebook`.`xref_assignment_student` AS `xref_assignment_student`, `entity_gradebook`.`entity_student` AS `entity_student` 
                 WHERE `entity_assignment`.`assignment_id` = `xref_assignment_student`.`assignment_id` AND `entity_student`.`id` = `xref_assignment_student`.`student_id`";
        $rs = mysqli_query($conn,$query);

        echo "<table border='1'>";
		    echo "<tr><th>".'Assignment'."</th>";
            echo "<th>". 'Student' ."</th>";
            echo "<th>". 'Student ID' ."</th></tr>";
        while   ($re = mysqli_fetch_array($rs)){
                  echo "<tr><td>".$re['Assignment']."</td>";
                  echo "<td>".$re['Student']."</td>";
                  echo "<td>".$re['Student ID']."</td></tr>";
        }
        echo "</table>";
?>