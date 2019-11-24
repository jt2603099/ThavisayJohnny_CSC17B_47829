<?php

//Create a connection to the database

//DB, UN, Pass, DB
        $servername = "209.129.8.7";
        $username = "47697";
        $password = "cis17b47697";
        $dbname = "47697";
		$conn=mysqli_connect($servername, $username, $password, $dbname);
// Query the database
        $query= "SELECT `entity_course`.`name` AS `Course Name`, `entity_assignment`.`name` AS `Assignment`, `entity_course`.`section_id` AS `Section ID` 
                 FROM `entity_gradebook`.`entity_course` AS `entity_course`, `entity_gradebook`.`xref_course_assignment` AS `xref_course_assignment`, `entity_gradebook`.`entity_assignment` AS `entity_assignment` 
                 WHERE `entity_course`.`course_id` = `xref_course_assignment`.`course_id` AND `entity_assignment`.`assignment_id` = `xref_course_assignment`.`assignment_id`";
        $rs = mysqli_query($conn,$query);

        echo "<table border='1'>";
		    echo "<tr><th>".'Course'."</th>";
            echo "<th>". 'Assignment' ."</th>";
            echo "<th>". 'Section ID' ."</th></tr>";
        while   ($re = mysqli_fetch_array($rs)){
                  echo "<tr><td>".$re['Course Name']."</td>";
                  echo "<td>".$re['Assignment']."</td>";
                  echo "<td>".$re['Section ID']."</td></tr>";
        }
        echo "</table>";
?>