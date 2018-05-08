
<?php


if ($_POST['submit']) {


    // attempt a connection


    $dbh = pg_connect("host=localhost port=5432 dbname=project user=postgres options='--application_name=$appName'");


    if (!$dbh) {


        die("Error in connection: " . pg_last_error());


    }


   


    // escape strings in input data


    $id = $_POST['ID'];


    $name = pg_escape_string($_POST['name']);
$type = pg_escape_string($_POST['type']);

$cat =pg_escape_string($_POST['cat']); 
$des =pg_escape_string($_POST['des']); 
$price =pg_escape_string($_POST['Price']);
$rid =pg_escape_string($_POST['Rid']);

    

   


    // execute query


  $sql = "INSERT INTO Menuitem (itemid, name, type, category, description, price, restaurantid) VALUES('$id', '$name', '$type', '$cat',  '$des', '$price', '$rid')";


    $result = pg_query($dbh, $sql);


    if (!$result) {


        die("Error in SQL query: " . pg_last_error());


    }


   


    echo "Data successfully inserted!";


   


    // free memory


    pg_free_result($result);


   


    // close connection


    pg_close($dbh);


}


?>

  


