<!DOCTYPE html>
<?php
    $name = 'Green Papaya';
    $arrayobj = new ArrayObject(array());
    $arrayobjMenu = new ArrayObject(array());
     $arrayobjRating = new ArrayObject(array());
    
$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=project user=postgres options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "select NAME, TYPE, URL, FIRST_OPEN_DATE, MANAGER_NAME, PHONE_NUMBER, STREET_ADDRESS, HOUR_OPEN, HOUR_CLOSE  from RESTAURANT FULL OUTER JOIN LOCATIONS ON RESTAURANT.RESTAURANTID = LOCATIONS.RESTAURANTID WHERE name = '$name' ORDER BY NAME " );
while ($row = pg_fetch_row($result)) {
  foreach ($row as &$value ) {
    $arrayobj->append($value);
     } }


$resulttwo = pg_query($conn, "SELECT MENUITEM.NAME, description, MENUITEM.PRICE  FROM MENUITEM FULL OUTER JOIN RESTAURANT ON MENUITEM.RESTAURANTID = RESTAURANT.RESTAURANTID WHERE RESTAURANT.name = '$name' " );
while ($rowTwo = pg_fetch_row($resulttwo)) {
  foreach ($rowTwo as &$valueTwo ) {
    $arrayobjMenu->append($valueTwo);
      }
}

  $resulthree = pg_query($conn, "SELECT RATER.NAME, RATING.FOOD, RATING.MOOD, RATING.PRICE, RATING.STAFF
FROM RESTAURANT 
FULL OUTER JOIN RATING ON RATING.RESTAURANTID = RESTAURANT.RESTAURANTID
FULL OUTER JOIN RATER ON RATER.USERID = RATING.USERID
WHERE RESTAURANT.NAME='$name' " );
while ($rowTwo = pg_fetch_row($resulthree)) {
  foreach ($rowTwo as &$valueTwo ) {
    $arrayobjRating->append($valueTwo);
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
  <meta name="description" content="Website Creator Description">
  <title>GreenPapaya</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qOznjY5gVi" once="menu" id="menu1-1c">

    

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

<section class="engine"></section><section class="features11 cid-qOznjYr9xe" id="features11-1d">

    

    

    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="assets/images/greenpp-348x348.jpg" alt="Mobirise" title="">
                </div>
                  <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        <?php echo $arrayobj[0]; ?>
                    </h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
<?php echo $arrayobj[1]; ?>            <br/><br/>  
        </p>
  <strong>Website</strong>  <a href="<?php echo $arrayobj[2]; ?>"><?php echo $arrayobj[2]; ?></a>                           </p>
                    </div>

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">
                                     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7"></h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7"></p>
                            </div>
                        </div>

                        <div class="card p-3 pr-3">
                            <div class="media">
                                     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7"></h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>          
</section>

<section class="section-table cid-qOzjJguPK4" id="table1-k">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Menu</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5"></h3>
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
                      Name</th><th class="head-item mbr-fonts-style display-7">
                      Description</th><th class="head-item mbr-fonts-style display-7">Price</th></tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[0]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[1]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[2]; ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[3]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[4]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[5]; ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[6]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[7]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[8]; ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[9]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[10]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[11]; ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[12]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[13]; ?></td><td class="body-item mbr-fonts-style display-7"><?php echo $arrayobjMenu[14]; ?></td></tr></tbody>
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

<section class="mbr-section article content12 cid-qOzk9x4sf8" id="content12-l">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <strong>First Open Date</strong> - <?php echo $arrayobj[3]; ?><br/><br/>
                    <strong>Managers Name:</strong> - <?php echo $arrayobj[4]; ?><br/><br/>
                    <strong>Phone Number: </strong> - <?php echo $arrayobj[5]; ?><br/><br/>
                    <strong>Hours of Operation: </strong>  <?php echo $arrayobj[7]; ?> to <?php echo $arrayobj[8]; ?> <br/><br/>
                     <strong>Address </strong> - <?php echo $arrayobj[6]; ?><br/><br/>
                      
                     
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="map2 cid-qOzkrngSL4" id="map2-m">

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJC0T_T_AGzkwR8To0JGRXsTI" allowfullscreen=""></iframe></div>
        </div>
    </div>
</div></section>

<section class="carousel slide testimonials-slider cid-qOAO3fgbRS" id="testimonials-slider1-3q">
    
    

    

    <div class="container text-center">
        <h2 class="pb-5 mbr-fonts-style display-2">
            WHAT OUR FANTASTIC CUSTOMER HAVE TO SAY
        </h2>

        <div class="carousel slide" data-ride="carousel" role="listbox">
            <div class="carousel-inner">
                
                
            <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[1]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[2]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[3]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[4]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[0]; ?>
                        </div>
                       
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[6]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[7]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[8]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[9]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[5]; ?>
                        </div>
                       
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[11]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[12]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[13]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[14]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[10]; ?>
                        </div>
                       
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[16]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[17]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[18]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[19]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[15]; ?>
                        </div>
                       
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[21]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[22]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[23]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[24]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[20]; ?>
                        </div>
                       
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[26]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[27]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[28]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[29]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[25]; ?>
                        </div>
                       
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[31]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[32]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[33]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[34]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[30]; ?>
                        </div>
                       
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[36]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[37]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[38]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[39]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[35]; ?>
                        </div>
                       
                    </div>
                </div> <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/user-168x168.jpg" alt="" title="">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                <b>Food:</b>  <?php echo $arrayobjRating[41]; ?><br><br>
                                <b>Mood:</b>  <?php echo $arrayobjRating[42]; ?><br><br>
                                <b>Price:</b>  <?php echo $arrayobjRating[43]; ?><br><br>
                                <b>Staff:</b>  <?php echo $arrayobjRating[44]; ?><br><br>
                                

                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $arrayobjRating[40]; ?>
                        </div>
                       
                    </div>
                </div></div>

            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev">
                  <span aria-hidden="true" class="mbri-arrow-prev mbr-iconfont"></span>
                  <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" role="button" data-slide="next">
                  <span aria-hidden="true" class="mbri-arrow-next mbr-iconfont"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-qOAVMOZbHj" id="footer6-3r">

    

    

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
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mbr-testimonials-slider/mbr-testimonials-slider.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>