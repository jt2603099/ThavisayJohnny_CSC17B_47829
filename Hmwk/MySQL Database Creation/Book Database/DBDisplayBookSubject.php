<?php

//Create a connection to the database

//DB, UN, Pass, DB
          $servername = "localhost";
		  $username = "root";
		  $password = "";
		  $dbname = "entity_book_database";
		  $conn=mysqli_connect($servername, $username, $password, $dbname);
// Query the database
        $query= "SELECT `entity_book`.`name` AS `Book`, `enum_subject`.`enum_subject` AS `Subject` 
                FROM `entity_book_database`.`xref_book_subject` AS `xref_book_subject`, `entity_book_database`.`entity_book` AS `entity_book`, `entity_book_database`.`enum_subject` AS `enum_subject` 
                WHERE `xref_book_subject`.`book_id` = `entity_book`.`book_id` AND `xref_book_subject`.`subject_id` = `enum_subject`.`ID`";
        $rs = mysqli_query($conn,$query);

        echo "<table border='1'>";
		    echo "<tr><th>".'Book'."</th>";
            echo "<th>". 'Subject' ."</th></tr>";
        while   ($re = mysqli_fetch_array($rs)){
                  echo "<tr><td>".$re['Book']."</td>";
                  echo "<td>".$re['Subject']."</td></tr>";
        }
        echo "</table>";
?>