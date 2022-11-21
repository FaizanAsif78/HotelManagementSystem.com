<?php
require_once('./database.php');
$obj = new rooms();
$obj2 = new feature();
$obj3 = new faciliies();
$obj4 = new roomsimages();
if (isset($_GET['viewroom'])) {
    $roomids = $_GET['viewroom'];
    $roomvalue = $obj->roomdataget($roomids);
    // print_r($roomvalue);
    //   echo "<script>alert($roomids)</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vacation Rental - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    require_once('./navbar.php');
    ?>
    <!-- END nav -->
    <div class="container">
        <div class="row">
            <h1>Room Nmae</h1>
        </div>
        <div class="row ">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="./rooms.php">Room</a></li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-6 p-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">

                        <?php
                        $imagevalue =   $obj4->getrmimage();
                        foreach ($imagevalue  as $imagekey) {
                            if ($roomvalue['Room_id'] == $imagekey['room_id']) {
                        ?>

                                <div class="carousel-item active">
                                    <img src="../HMS Backend/roomimages/<?php echo $imagekey['room_img'] ?>" class="d-block w-100" alt="..." height="500px">
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 p-5 ">
                <h3><span>Rs <?php echo $roomvalue['room_price'] ?></span> Per Night</h3>
                <h5 class="text-warning"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></h5>

                <div class="row">
                    <h4>Feature :</h4>

                    <?php
                    $feavalue =   $obj2->getfeature();
                    foreach ($feavalue  as $feakey) {
                        if ($roomvalue['Room_id'] == $feakey['room_id']) {
                    ?>
                            <div class="col-lg-2">
                                <p class="text-dark"><span class="p-5px" style="width:100px; background:#f0f2f0; text-align:center;"><?php echo $feakey['Feature'] ?></span></p>
                            </div>
                    <?php
                        }
                    }
                    ?>


                </div>

                <div class="row">
                    <h4>Facility :</h4>

                    <?php

                    $faclilityvalue =   $obj3->getfacility();
                    foreach ($faclilityvalue  as $facilitykey) {
                        if ($roomvalue['Room_id'] == $facilitykey['room_id']) {
                    ?>
                            <div class="col-lg-3">
                                <p class="text-dark"><span class="p-5px" style=" background:#f0f2f0; text-align:center;"><?php echo $facilitykey['faclity'] ?></span></p>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

                <div class="row">
                    <h4>Guest :</h4>
                    <div class="col-lg-3">
                        <p class="text-dark">Childeren :<span class="p-5px" style=" background:#f0f2f0; text-align:center;"><?php echo $roomvalue['Childrens'] ?></span></p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-dark">Adult :<span class="p-5px" style=" background:#f0f2f0; text-align:center;"><?php echo $roomvalue['Adults'] ?></span></p>
                    </div>

                </div>
                <div class="row">
                  <a href="./booking_confirm_page.php?booking=<?php echo $roomvalue['Room_id']?>">  <button class="btn btn-danger">Book Now</button></a>
                </div>


            </div>
        </div>

        <div class="row">
            <h3>Description</h3>

                </div>
                <div class="row">
            <p><?php echo $roomvalue['room_description'] ?></p>
        </div>
        <div class="row">
            <h3>Review & Rating</h3>
            </div>
            <div class="row">
                <div class="col-lg-1"><img src="../HMS Backend/productimg/brown kurta.jpg" alt="" width="40px" height="40px"></div>
                <div class="col-lg-4">Lorem ipsum dolor sit amet.</div>
            </div>
            <div class="row">
                <p>Lorem ipsum dolor ss commodi? Recusandae explicabo ut quidem accusamus et quaerat quae, laboriosam esse libero blanditiis nihil reiciendis eos autem necessitatibus repudiandae rerum illo ipsum? Ut vel saepe ipsum eligendi corporis.S</p>
            </div>
        

    </div>


    <?php

    require_once('./footer.php');
    ?>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>



</body>

</html>