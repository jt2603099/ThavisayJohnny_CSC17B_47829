<?php

//Create a connection to the database

//DB, UN, Pass, DB
          $servername = "localhost";
		  $username = "root";
		  $password = "";
		  $dbname = "entity_gradebook";
		  $conn=mysqli_connect($servername, $username, $password, $dbname);
// Query the database
        $query= "SELECT `entity_course`.`name` AS `Course Name`, `entity_instructor`.`name` AS `Instructor Name`, `entity_course`.`section_id` AS `Section ID` 
                 FROM `entity_gradebook`.`xref_instructor_course` AS `xref_instructor_course`, `entity_gradebook`.`entity_course` AS `entity_course`, `entity_gradebook`.`entity_instructor` AS `entity_instructor` 
                 WHERE `xref_instructor_course`.`course_id` = `entity_course`.`course_id` AND `xref_instructor_course`.`instructor_id` = `entity_instructor`.`id`";
        $rs = mysqli_query($conn,$query);

        echo "<table border='1'>";
		    echo "<tr><th>".'Course'."</th>";
            echo "<th>". 'Instructor' ."</th>";
            echo "<th>". 'Section ID' ."</th></tr>";
        while   ($re = mysqli_fetch_array($rs)){
                  echo "<tr><td>".$re['Course Name']."</td>";
                  echo "<td>".$re['Instructor Name']."</td>";
                  echo "<td>".$re['Section ID']."</td></tr>";
        }
        echo "</table>";
?>