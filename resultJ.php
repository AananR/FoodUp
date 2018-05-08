<?php
  

   
    $arrayobj = new ArrayObject(array());
 
  $appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=project user=postgres options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "SELECT RESTAURANT.TYPE, AVG(RATING.FOOD)
FROM RESTAURANT 
FULL OUTER JOIN RATING ON RATING.RESTAURANTID = RESTAURANT.RESTAURANTID
WHERE RATING.MOOD >= ALL (SELECT MAX(RATING.FOOD) 
            FROM RATING) 
GROUP BY RESTAURANT.TYPE
ORDER BY AVG(RATING.FOOD) DESC" );
while ($row = pg_fetch_row($result)) {
  echo "Type: $row[0] ,  Avg: $row[1]";
  echo "<br />\n";
}



 
 



 ?>