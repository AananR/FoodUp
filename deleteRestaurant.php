
<?php


if ($_POST['submit']) {


    // attempt a connection


    $dbh = pg_connect("host=localhost port=5432 dbname=project user=postgres options='--application_name=$appName'");


    if (!$dbh) {


        die("Error in connection: " . pg_last_error());


    }


   


    // escape strings in input data


    $id = $_POST['ID'];


   
    

   


    // execute query


  $sql = "DELETE FROM RESTAURANT WHERE RESTAURANTID='$id'";


    $result = pg_query($dbh, $sql);


    if (!$result) {


        die("Error in SQL query: " . pg_last_error());


    }


   


    echo "You have successfully removed your restaurant";


   


    // free memory


    pg_free_result($result);


   


    // close connection


    pg_close($dbh);


}


?>

  


