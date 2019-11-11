<?php

//Create a connection to the database

//DB, UN, Pass, DB
          $servername = "localhost";
		  $username = "root";
		  $password = "";
		  $dbname = "entity_book_database";
		  $conn=mysqli_connect($servername, $username, $password, $dbname);
// Query the database
        $query= "SELECT `entity_book`.`name` AS `Book`, `entity_publisher`.`name` AS `Publisher`, `entity_book`.`published_date` AS `Date` 
                FROM `entity_book_database`.`xref_book_publisher` AS `xref_book_publisher`, `entity_book_database`.`entity_book` AS `entity_book`, `entity_book_database`.`entity_publisher` AS `entity_publisher` 
                WHERE `xref_book_publisher`.`book_id` = `entity_book`.`book_id` AND `entity_publisher`.`publisher_id` = `xref_book_publisher`.`publisher_id`";
        $rs = mysqli_query($conn,$query);

        echo "<table border='1'>";
		    echo "<tr><th>".'Book'."</th>";
            echo "<th>". 'Publisher' ."</th>";
            echo "<th>". 'Published' ."</th></tr>";
        while   ($re = mysqli_fetch_array($rs)){
                  echo "<tr><td>".$re['Book']."</td>";
                  echo "<td>".$re['Publisher']."</td>";
                  echo "<td>".$re['Date']."</td></tr>";
        }
        echo "</table>";
?>