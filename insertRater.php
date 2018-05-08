
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
$email = pg_escape_string($_POST['email']);

$date= date("Y-m-d");
$rep = 0;

$type=pg_escape_string($_POST['type']);
    

   


    // execute query


  $sql = "INSERT INTO Rater (USERID, email, name, join_date, type, reputation) VALUES('$id', '$email', '$name', '$date',  '$type', '$rep')";


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

  


