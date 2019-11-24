<?php

//Create a connection to the database

//DB, UN, Pass, DB
        $servername = "209.129.8.7";
        $username = "47697";
        $password = "cis17b47697";
        $dbname = "47697";
		$conn=mysqli_connect($servername, $username, $password, $dbname);
// Query the database
        $query= "SELECT `entity_book`.`name` AS `Book`, `entity_author`.`name` AS `Author`, `entity_book`.`ISBN-10` AS `ISBN`, `entity_book`.`published_date` AS `Date` 
                FROM `entity_book_database`.`entity_book` AS `entity_book`, `entity_book_database`.`xref_book_author` AS `xref_book_author`, `entity_book_database`.`entity_author` AS `entity_author` 
                WHERE `entity_book`.`book_id` = `xref_book_author`.`book_id` AND `entity_author`.`author_id` = `xref_book_author`.`author_id`";
        $rs = mysqli_query($conn,$query);

        echo "<table border='1'>";
		    echo "<tr><th>".'Book'."</th>";
            echo "<th>". 'Author' ."</th>";
            echo "<th>". 'ISBN-10'  ."</th>";
            echo "<th>". 'Published' ."</th></tr>";
        while   ($re = mysqli_fetch_array($rs)){
                  echo "<tr><td>".$re['Book']."</td>";
                  echo "<td>".$re['Author']."</td>";
                  echo "<td>".$re['ISBN']."</td>";
                  echo "<td>".$re['Date']."</td></tr>";
        }
        echo "</table>";
?>