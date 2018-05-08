<!DOCTYPE html>
<?php
 $arrayobjBNF = new ArrayObject(array());
    $arrayobjZaks = new ArrayObject(array());
     $arrayobjMcD = new ArrayObject(array());
      $arrayobj = new ArrayObject(array());
       $arrayobjGreen = new ArrayObject(array());
        $arrayobjAriana = new ArrayObject(array());
         $arrayobjVitt = new ArrayObject(array());
          $arrayobjOh = new ArrayObject(array());
           $arrayobjShaw = new ArrayObject(array());
            $arrayobjCol = new ArrayObject(array());
             $arrayobjSushi = new ArrayObject(array());
              $arrayobjStella = new ArrayObject(array());
               $arrayobjEvoo = new ArrayObject(array());
  $appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=project user=postgres options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'IPho' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobj->append($value);
     } }
      pg_free_result($result);

      $result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Evoo Greek Kitchen' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjEvoo->append($value);
     } }
      pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Stella Luna Gelato' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjStella->append($value);
     } }
pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Burgers N Fries Forever' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjBNF->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Zaks Diner' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjZaks->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'McDonalds' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjMcD->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Green Papaya' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjGreen->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Ariana' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjAriana->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Vittoria Trattoria' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjVitt->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Oh so good!' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjOh->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Shawarma Palace' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjShaw->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Colonade Pizza' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjCol->append($value);
     } }
     pg_free_result($result);

$result = pg_query($conn, "SELECT RESTAURANT.NAME, MENUITEM.NAME, PRICE, URL, HOUR_OPEN,HOUR_CLOSE, MANAGER_NAME
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN LOCATIONS ON MENUITEM.RESTAURANTID = LOCATIONS.RESTAURANTID
WHERE MENUITEM.PRICE > ANY (SELECT MENUITEM.PRICE
                        FROM MENUITEM
                        WHERE RESTAURANT.NAME = 'Sushi 88' )
ORDER BY MENUITEM.PRICE DESC
LIMIT 1" );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobjSushi->append($value);
     } }
 
 



 ?>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>D</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qOyNx7OUcv" once="menu" id="menu1-n">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" >
                        FoodUp</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                </li><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="Main.html">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Home</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="LogOn.html"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>Join &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"></section><section class="mbr-section content4 cid-qOzlDxLflD" id="content4-o">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">So you want to be high roller and try the most expensive thing on the menu</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Don't worry, we gotchu!</h3>
                
            </div>
        </div>
    </div>
</section>

<section class="accordion1 cid-qOzlRcsV3h" id="accordion1-p">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">Well here there are:</h2>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_204" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_204" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    <?php echo $arrayobj[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse1_204" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_204">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                  <?php echo "MENUITEM: $arrayobj[1] <br /> Price: $arrayobj[2] <br />URL: $arrayobj[3] <br />Hour Open: $arrayobj[4] <br />Hour Close: $arrayobj[5] <br />Manager name: $arrayobj[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_204" aria-expanded="false" aria-controls="collapse2">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjBNF[0]; ?>
                               </h4>
                            </a>
                            
                        </div>
                        <div id="collapse2_204" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#bootstrap-accordion_204">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   <?php echo "MENUITEM: $arrayobjBNF[1] <br /> Price: $arrayobjBNF[2] <br />URL: $arrayobjBNF[3] <br />Hour Open: $arrayobjBNF[4] <br />Hour Close: $arrayobjBNF[5] <br />Manager name: $arrayobjBNF[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse3_204" aria-expanded="false" aria-controls="collapse3">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>  <?php echo $arrayobjZaks[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse3_204" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_204">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   <?php echo "MENUITEM: $arrayobjZaks[1] <br /> Price: $arrayobjZaks[2] <br />URL: $arrayobjZaks[3] <br />Hour Open: $arrayobjZaks[4] <br />Hour Close: $arrayobjZaks[5] <br />Manager name: $arrayobjZaks[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse4_204" aria-expanded="false" aria-controls="collapse4">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjMcD[0]; ?>
                                </h4>
                            </a> 
                        </div>
                        <div id="collapse4_204" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#bootstrap-accordion_204">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                  <?php echo "MENUITEM: $arrayobjMcD[1] <br /> Price: $arrayobjMcD[2] <br />URL: $arrayobjMcD[3] <br />Hour Open: $arrayobjMcD[4] <br />Hour Close: $arrayobjMcD[5] <br />Manager name: $arrayobjMcD[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse5_204" aria-expanded="false" aria-controls="collapse5">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjGreen[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse5_204" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#bootstrap-accordion_204">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   <?php echo "MENUITEM: $arrayobjGreen[1] <br /> Price: $arrayobjGreen[2] <br />URL: $arrayobjGreen[3] <br />Hour Open: $arrayobjGreen[4] <br />Hour Close: $arrayobjGreen[5] <br />Manager name: $arrayobjGreen[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSix">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse6_204" aria-expanded="false" aria-controls="collapse6">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjAriana[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse6_204" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#bootstrap-accordion_204">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                  <?php echo "MENUITEM: $arrayobjAriana[1] <br /> Price: $arrayobjAriana[2] <br />URL: $arrayobjAriana[3] <br />Hour Open: $arrayobjAriana[4] <br />Hour Close: $arrayobjAriana[5] <br />Manager name: $arrayobjAriana[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="accordion1 cid-qOzlRqEF7Q" id="accordion1-q">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">But wait, there's more</h2>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_85" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_85" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    <?php echo $arrayobjVitt[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse1_85" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_85">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   <?php echo "MENUITEM: $arrayobjVitt[1] <br /> Price: $arrayobjVitt[2] <br />URL: $arrayobjVitt[3] <br />Hour Open: $arrayobjVitt[4] <br />Hour Close: $arrayobjVitt[5] <br />Manager name: $arrayobjVitt[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_85" aria-expanded="false" aria-controls="collapse2">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjOh[0]; ?>
                               </h4>
                            </a>
                            
                        </div>
                        <div id="collapse2_85" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#bootstrap-accordion_85">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                  <?php echo "MENUITEM: $arrayobjOh[1] <br /> Price: $arrayobjOh[2] <br />URL: $arrayobjOh[3] <br />Hour Open: $arrayobjOh[4] <br />Hour Close: $arrayobjOh[5] <br />Manager name: $arrayobjOh[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse3_85" aria-expanded="false" aria-controls="collapse3">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjShaw[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse3_85" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_85">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   <?php echo "MENUITEM: $arrayobjShaw[1] <br /> Price: $arrayobjShaw[2] <br />URL: $arrayobjShaw[3] <br />Hour Open: $arrayobjShaw[4] <br />Hour Close: $arrayobjShaw[5] <br />Manager name: $arrayobjShaw[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse4_85" aria-expanded="false" aria-controls="collapse4">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjCol[0]; ?>
                                </h4>
                            </a> 
                        </div>
                        <div id="collapse4_85" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#bootstrap-accordion_85">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                  <?php echo "MENUITEM: $arrayobjCol[1] <br /> Price: $arrayobjCol[2] <br />URL: $arrayobjCol[3] <br />Hour Open: $arrayobjCol[4] <br />Hour Close: $arrayobjCol[5] <br />Manager name: $arrayobjCol[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse5_85" aria-expanded="false" aria-controls="collapse5">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjSushi[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse5_85" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#bootstrap-accordion_85">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                  <?php echo "MENUITEM: $arrayobjSushi[1] <br /> Price: $arrayobjSushi[2] <br />URL: $arrayobjSushi[3] <br />Hour Open: $arrayobjSushi[4] <br />Hour Close: $arrayobjSushi[5] <br />Manager name: $arrayobjSushi[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSix">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse6_85" aria-expanded="false" aria-controls="collapse6">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjStella[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse6_85" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#bootstrap-accordion_85">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   <?php echo "MENUITEM: $arrayobjStella[1] <br /> Price: $arrayobjStella[2] <br />URL: $arrayobjStella[3] <br />Hour Open: $arrayobjStella[4] <br />Hour Close: $arrayobjStella[5] <br />Manager name: $arrayobjStella[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="accordion1 cid-qOzlRHgti8" id="accordion1-r">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">You thought we were done?</h2>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_86" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_86" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    <?php echo $arrayobjEvoo[0]; ?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse1_86" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_86">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   <?php echo "MENUITEM: $arrayobjEvoo[1] <br /> Price: $arrayobjEvoo[2] <br />URL: $arrayobjEvoo[3] <br />Hour Open: $arrayobjEvoo[4] <br />Hour Close: $arrayobjEvoo[5] <br />Manager name: $arrayobjEvoo[6]  " ; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>