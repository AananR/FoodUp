<?php
    $name = $_POST["name"];
   
    $arrayobj = new ArrayObject(array());
 
  $appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=project user=postgres options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "SELECT RESTAURANT.NAME,  LOCATIONS.FIRST_OPEN_DATE 
FROM RESTAURANT, LOCATIONS
WHERE RESTAURANT.RESTAURANTID IN (SELECT RATING.RESTAURANTID
                FROM RATING 
                WHERE RATING.STAFF < ANY (SELECT RATING.STAFF
                            FROM RATING 
                            WHERE RATING.USERID = (SELECT RATER.USERID 
                                      FROM RATER
                                      WHERE RATER.NAME = '$name' )
                ORDER BY RATING.DATE ASC)) AND RESTAURANT.RESTAURANTID = LOCATIONS.RESTAURANTID" );
while ($row = pg_fetch_row($result)) {
  echo "Restaurant Name: $row[0], First Open Date: $row[1]";
  echo "<br />\n";
}



 
 



 ?>