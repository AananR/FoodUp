<?php
   $name = $_POST['name'];
  $appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=project user=postgres options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "SELECT RATER.NAME, RATER.REPUTATION, RATING.COMMENTS, MENUITEM.NAME, MENUITEM.PRICE 
FROM RESTAURANT 
FULL OUTER JOIN RATING ON RATING.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN RATER ON RATER.USERID = RATING.USERID
FULL OUTER JOIN MENUITEM ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
WHERE (SELECT COUNT(*) FROM RATING) >= ALL (SELECT COUNT(*) FROM RATING) 
AND RESTAURANT.NAME = '$name'
GROUP BY RATER.NAME, RATER.REPUTATION, RATING.COMMENTS, MENUITEM.NAME, MENUITEM.PRICE " );
while ($row = pg_fetch_row($result)) {
  echo "Name: $row[0],   REPUTATION: $row[1], COMMENTS: $row[2], FOOD Name: $row[3] , PRICE: $row[4]  ";
  echo "<br />\n";
}


 
 



 ?>