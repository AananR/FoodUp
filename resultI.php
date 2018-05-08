<?php
    $type = $_POST["name"];
   
    $Starter ='Starter';
    $Main = 'Main';
    $Dessert = 'Dessert';
    $arrayobj = new ArrayObject(array());
    $arrayobjStarter = new ArrayObject(array());
    $arrayobjMain = new ArrayObject(array());
    $arrayobjDessert = new ArrayObject(array());
  $appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=project user=postgres options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "SELECT RESTAURANT.NAME, RATER.NAME
FROM RESTAURANT 
FULL OUTER JOIN RATING ON RATING.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN RATER ON RATER.USERID = RATING.USERID
WHERE RATING.FOOD >= ALL (SELECT MAX(RATING.FOOD) 
                        FROM RATING) AND RESTAURANT.TYPE = '$type'
GROUP BY RESTAURANT.NAME, RATER.NAME" );
while ($row = pg_fetch_row($result)) {
  echo "Restaurant NAME: $row[0],  Rater Name: $row[1]";
  echo "<br />\n";
}



 
 



 ?>