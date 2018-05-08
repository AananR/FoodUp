<!DOCTYPE html>
<?php
    $type = 'Japanese';
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
$result = pg_query($conn, "SELECT MANAGER_NAME, FIRST_OPEN_DATE
FROM LOCATIONS 
  FULL OUTER JOIN RESTAURANT ON LOCATIONS.RESTAURANTID = RESTAURANT.RESTAURANTID
WHERE RESTAURANT.TYPE= '$type' " );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobj->append($value);
     } }

  $resulttwo = pg_query($conn, "SELECT MENUITEM.CATEGORY, AVG(MENUITEM.PRICE) 
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
WHERE RESTAURANT.TYPE ='$type' AND MENUITEM.CATEGORY ='$Starter'
GROUP BY MENUITEM.CATEGORY" );
while ($row = pg_fetch_row($resulttwo)) {
  foreach ($row as &$value ) {
    $arrayobjStarter->append($value);
    echo $value+ "\n" ;
     } }

$resultthree = pg_query($conn, "SELECT MENUITEM.CATEGORY, AVG(MENUITEM.PRICE) 
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
WHERE RESTAURANT.TYPE ='$type' AND MENUITEM.CATEGORY ='$Main'
GROUP BY MENUITEM.CATEGORY"  );
while ($rowTwo = pg_fetch_row($resultthree)) {
  foreach ($rowTwo as &$valueTwo ) {
    $arrayobjMain->append($valueTwo);
    echo "\n" + $valueTwo;
      }
}

  $resultfour = pg_query($conn, "SELECT MENUITEM.CATEGORY, AVG(MENUITEM.PRICE) 
FROM MENUITEM 
FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID
WHERE RESTAURANT.TYPE ='$type' AND MENUITEM.CATEGORY ='$Dessert'
GROUP BY MENUITEM.CATEGORY " );
while ($rowTwo = pg_fetch_row($resultfour)) {
  foreach ($rowTwo as &$valueTwo ) {
    $arrayobjDessert->append($valueTwo);
    echo $valueTwo;
  }
 }



 ?>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Web Site Creator Description">
  <title>Japanese</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qOAGAqixa7" once="menu" id="menu1-2m">

    

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

<section class="engine"></section><section class="mbr-section content4 cid-qOAGAqG2xn" id="content4-2n">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Japanese</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="section-table cid-qOAGAqXkeJ" id="table1-2o">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><p>
          &nbsp; &nbsp;Want to learn a bit more about the locations?</p></h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            Well here are the managers names as well as the date that the locations have opened&nbsp;</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      NAME</th><th class="head-item mbr-fonts-style display-7">First Open Date&nbsp;</th></tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><?php echo $arrayobj[0]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobj[1]; ?></td></tr></tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="accordion2 cid-qOAGArYN5H" id="accordion2-2p">

    


    
    <div class="container">
        <div class="media-container-row pt-5">
            <div class="accordion-content">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">The average price for each dish?</h2>
                
                <div id="bootstrap-accordion_115" class="panel-group accordionStyles accordion pt-5 mt-3" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse1_115" aria-expanded="false" aria-controls="collapse1">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjStarter[0]; ?>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapse1_115" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_115">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7">
                                      <?php echo (float)$arrayobjStarter[1]; ?>.</p>
                                </div>
                            </div>
                        </div>
                
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_115" aria-expanded="false" aria-controls="collapse2">
                                    <h4 class="mbr-fonts-style mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjMain[0]; ?>
                                    </h4>
                                </a>
                                
                            </div>
                            <div id="collapse2_115" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#bootstrap-accordion_115">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7">
                                       <?php echo (float)$arrayobjMain[1]; ?></p>
                                </div>
                            </div>
                        </div>
                
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse3_115" aria-expanded="false" aria-controls="collapse3">
                                    <h4 class="mbr-fonts-style display-5">
                                        <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> <?php echo $arrayobjDessert[0]; ?>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapse3_115" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_115">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-7">
                                      <?php echo (float)$arrayobjDessert[1]; ?></p>
                                </div>
                            </div>
                        </div>
                
                        
                
                        
                
                        
                </div>
            </div>
             <div class="mbr-figure" style="width: 105%;">
                    <img src="assets/images/mbr-3-1042x695.jpg" alt="Mobirise" title="">
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-qOAH7qmYWM" id="footer6-3k">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    By: Aanan Rahman &amp; Mariam Mowazi</p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>