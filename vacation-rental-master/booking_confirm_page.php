<?php
require_once('./database.php');
@$umemail = $_SESSION['user_email'];
$obj = new fetchspecficuserdata();
$returnuserdetail =  $obj->specfic($umemail);
$obj2 = new rooms();
$obj4 = new roomsimages();
$obj5 = new bookings();
if (isset($_GET['booking'])) {
    $roomids = $_GET['booking'];
    $roomvalue = $obj2->roomdataget($roomids);
}
@$userid = $returnuserdetail['user_id'];
$roomid = $roomvalue['Room_id'];
if (isset($_POST['COCIsub'])) {
    if (@$umemail == "") {
        echo "<script>alert('First You Login Than Your Booking successfully')</script> ";
    } else {

        $obj5->bookinginsert($_POST, $userid, $roomid);
    }
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
    <div class="container-fluid">
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
            <div class="col-lg-6 p-5 ">
                <h5>Booking Details</h5>
                <form class="row g-3" method="POST" id="myform">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Name</label>
                        <input type="text" class="form-control" name="bookername" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Phone no</label>
                        <input type="number" class="form-control" name="phoneno" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <input type="hidden" class="form-control" name="roomprice" value="<?php echo $roomvalue['room_price'] ?>" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Check-in</label>
                        <input type="date" class="form-control" name="checkin" onchange="Check_availbility()" id="checkinval">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Check-out</label>
                        <input type="date" class="form-control" name="checkout" onchange="Check_availbility()" id="checkoutval">
                    </div>
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">Payment Method</label>
                        <select id="paymentmethod" onchange="paymentdelect()" name="paymentmethod" class="form-select">
                            <option selected>...</option>
                            <option value="POCI">Payment On Check In</option>
                            <option value="POCC">Payment width Credit Card</option>
                        </select>
                    </div>
                    <div class="spinner-grow text-info " id="spinnerss" role="status">
                        <span class="visually-hidden">loading...</span>
                    </div>
                    <h6 class="text-dark" id="statuss">Please Check Check-in & Check-out Date</h6>
                    <div class="col-12">

                        <button type="submit" class="btn btn-primary " id="pay_id" disabled> <span>Pay with credit</span></button>
                        <button type="submit" class="btn btn-primary" name="COCIsub" id="pay_id1" disabled> Pay on check in</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row ml-4">
            <h5>Room Name : <span><?php echo $roomvalue['room_name'] ?></span></h5>
        </div>
        <div class="row ml-4">
            <h5>Room Price : <?php echo $roomvalue['room_price'] ?>/Night</h5>
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

    <script>
        let pay_id = document.getElementById('pay_id').setAttribute("style", "display:none;");
        let pay_ids = document.getElementById('pay_id1').setAttribute("style", "display:none;");
        // pay_id.setAttribute("disabled", true);
        // pay_ids.setAttribute("disabled",true)
        let statuss = document.getElementById('statuss');
        let spinners = document.getElementById('spinnerss').style.display = "none";
        statuss.classList.replace("text-dark", "text-danger");


        function paymentdelect() {
            let paymentvalue = document.getElementById('paymentmethod').value;
            // alert(paymentvalue);
            if (paymentvalue == "POCC") {
                let pay_id = document.getElementById('pay_id').setAttribute("style", "display:block;");
                let pay_ids = document.getElementById('pay_id1').setAttribute("style", "display:none;");
                // pay_id.classList.remove("d-none");
            } else if (paymentvalue == "POCI") {
                let pay_id = document.getElementById('pay_id').setAttribute("style", "display:none;");
                let pay_ids = document.getElementById('pay_id1').setAttribute("style", "display:block;");

            }
        }

        function Check_availbility() {
            let check_in_val = document.getElementById('checkinval').value;
            let check_out_val = document.getElementById('checkoutval').value;


            if (check_in_val !== "" && check_out_val !== "") {
                let spinners = document.getElementById('spinnerss').style.display = "block";

                let formvalue = new FormData(myform);
                statuss.innerText = "";
                // alert(formvalue);

                $.ajax({
                    url: "./booking_ajax.php",
                    method: "POST",
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    data: formvalue,
                    success: function(response) {
                        statuss.classList.replace("text-dark", "text-danger");
                        if (response==1) {
                            statuss.innerText = "You Check the Checkout date the date match the checkin date Please select the check out date";
                            let spinners = document.getElementById('spinnerss').style.display = "none";
                            let pay_id1 = document.getElementById('pay_id1').setAttribute("disabled",true);

                        
                        } else if (response==2) {
                            statuss.classList.replace("text-dark", "text-danger");
                            statuss.innerText = "Your check-out is earlier Than the check-in date";
                            let spinners = document.getElementById('spinnerss').style.display = "none";
                            let pay_id1 = document.getElementById('pay_id1').setAttribute("disabled",true);


                        } else if (response==3) {
                            statuss.classList.replace("text-dark", "text-danger");
                            let spinners = document.getElementById('spinnerss').style.display = "none";
                            statuss.innerText = "Your check-in is earlier than the current date date";
                            let pay_id1 = document.getElementById('pay_id1').setAttribute("disabled",true);


                        } else {
                            statuss.innerText = "Your total Price: " +response.Price+" No of days :"+response.day;
                            statuss.classList.replace("text-danger", "text-success");
                            let spinners = document.getElementById('spinnerss').style.display = "block";
                            let pay_id1 = document.getElementById('pay_id1').removeAttribute("disabled");


                        }


                    }

                })
            }
        }
    </script>

</body>

</html>