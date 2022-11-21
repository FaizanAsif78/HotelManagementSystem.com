<?php

session_start();
class database
{

    public $host = 'localhost';
    public $username = 'root';
    public $passowrd = '';
    public $dbname = 'hms_system';
    public $connection;

    function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->passowrd, $this->dbname);
        if ($this->connection) {
            // echo "dataasehas been wordking";
        } else {
            echo "dataasehas been not wordking";
        }
    }
}
class sitesetting extends database
{


    function sitesetting()
    {
        $this->query = "SELECT * FROM `site_setting`";
        $this->run = $this->connection->query($this->query);
        $this->fet = $this->run->fetch_assoc();
        return $this->fet;
    }
    function updatesitesetting($post)
    {
        $title = $post['Titless'];
        $aboutdecs = $post['aboutdecs'];


        $this->query2 = "UPDATE `site_setting` SET`Site_title`='$title',`Site_Aboutdetail`='$aboutdecs' WHERE 1";
        $this->run2 = $this->connection->query($this->query2);
    }
}
class Contactstting extends database
{

    function contactdetails()
    {
        $this->query3 = "SELECT * FROM `contactpage_info`";
        $this->run3 = $this->connection->query($this->query3);
        $this->fet3 = $this->run3->fetch_assoc();
        return $this->fet3;
    }
    function updatecontact($post)
    {
        $hoteladress = $post['hoteladress'];
        $hotelphone = $post['hotelphone'];
        $hotelemail = $post['hotelemail'];
        $hotelwebsite = $post['hotelwebsite'];


        $this->query4 = "UPDATE `contactpage_info` SET `Hotel_address`='$hoteladress',`Hotel_phone`='$hotelphone',`Hotel_email`='$hotelemail',`Hotel_website`='$hotelwebsite' WHERE 1";
        $this->run4 = $this->connection->query($this->query4);
    }
}
//////////////////// Contact page Module start

class contactpage extends database
{
    function contactusinsert($post)
    {

        $fullname = $post['fullname'];
        $email = $post['email'];
        $subject = $post['subject'];
        $message = $post['message'];
        $this->query5 = "INSERT INTO `contact_usdetails`( `Fullname`, `Contact_email`, `Subject`, `Message`)
         VALUES ('$fullname','$email','$subject','$message')";
        $this->run5 = $this->connection->query($this->query5);
        if ($this->run5) {
            return "Your Message has been sent";
        }
    }
}
class rooms extends database
{
    function viewrooms()
    {

        $this->que1 = "SELECT * FROM `rooms` WHERE 1";
        $this->run1 = $this->connection->query($this->que1);
        while ($fet = $this->run1->fetch_assoc()) {
            $datas[] = $fet;
        }
        return $datas;
    }

    function roomdataget($rosid)
    {
        $this->q6 = "SELECT * FROM `rooms` WHERE Room_id = '$rosid'";
        $this->runrooms = $this->connection->query($this->q6);
        $fet7 = $this->runrooms->fetch_assoc();
        return $fet7;
    }
}

class faciliies extends database
{
    function getfacility()
    {
        $this->que1 = "SELECT * FROM `room_facility` INNER JOIN `facility` ON room_facility.faclily_id=facility.Facility_id ";
        $this->run2 = $this->connection->query($this->que1);
        while ($fet2 = $this->run2->fetch_assoc()) {
            $datas2[] = $fet2;
        }
        return $datas2;
    }
}
class feature extends database
{
    function getfeature()
    {
        $this->que3 = "SELECT * FROM `room_feature` INNER JOIN `features` ON room_feature.feature_id=features.feature_id ";
        $this->run3 = $this->connection->query($this->que3);
        while ($fet3 = $this->run3->fetch_assoc()) {
            $datas3[] = $fet3;
        }
        return $datas3;
    }
}
class roomsimages extends database
{
    function getrmimage()
    {
        $this->que4 = "SELECT * FROM `room_image` WHERE 1 ";
        $this->run4 = $this->connection->query($this->que4);
        while ($fet4 = $this->run4->fetch_assoc()) {
            $datas4[] = $fet4;
        }
        return $datas4;
    }
}

class users extends database
{
    function signup($userdetails)
    {
        $first_name = $userdetails['first_name'];
        $last_name = $userdetails['last_name'];
        $birthday = $userdetails['birthday'];
        $gender = $userdetails['gender'];
        $email = $userdetails['email'];
        $phone = $userdetails['phone'];
        $passoword = $userdetails['passoword'];
        $confirm_password = $userdetails['confirm_password'];

                $this->uesrq1 = "SELECT * FROM `user_login` WHERE user_email = '$email'";
                $this->userrun1 = $this->connection->query($this->uesrq1);
                if ($this->userrun1->num_rows>0) {
                    return "Your Email is already Exist";
                }else{
        if ($passoword == $confirm_password) {

            $this->uesrq2 = "INSERT INTO `user_login`( `user_firstname`, `user_lastname`, `user_dob`, `user_gender`, `user_email`, `user_password`, `user_pic`, `user_phoneno`)
          VALUES ('$first_name','$last_name',' $birthday','$gender','$email','$passoword','Default','$phone')";
            $this->userrun2 = $this->connection->query($this->uesrq2);

            
                return "Your Account has been created Successfully";
            
        } else {
            return  "Your Password is not matched";
        }
    }
}
function login($logindetails){
    $email=$logindetails['email'];
    $password=$logindetails['password'];
    $this->loginq1 = "SELECT * FROM `user_login` WHERE user_email = '$email' AND user_password = '$password'";
                $this->runloginq1 = $this->connection->query($this->loginq1);
                if ($this->runloginq1->num_rows>0) {
                    $_SESSION['user_email'] = $email;
                   header('location:../index.php');
                }else{
                    return "Your Login Details Is incorrect";
                }
}
}
class fetchspecficuserdata extends database{
    function specfic($useremail){
        $this->userq7="SELECT * FROM `user_login` WHERE user_email='$useremail'";
        $this->runspecfic = $this->connection->query($this->userq7);
        $fets=$this->runspecfic->fetch_assoc();
        return $fets;
    }
}
class bookings extends database{
    function bookinginsert($post,$userid,$roomid){
        $bookername=$post['bookername'];
        $phoneno=$post['phoneno'];
        $address=$post['address'];
        $checkin=$post['checkin'];
        $checkout=$post['checkout'];
        $paymentmethod=$post['paymentmethod'];
        $this->bookq1="INSERT INTO `booking_orders`(`user_id`, `room_id`, `ures_address`, `bookin_status`, `check_in`, `check_out`, `Payment_method`, `Booker_name`, `Booker_phone`)
         VALUES ('$userid','$roomid','$address','Pending','$checkin','$checkout','$paymentmethod','$bookername','$phoneno')";
        $this->bookrun=$this->connection->query($this->bookq1);
        header("location:./bookingsuccess.php");
        
}
}
class profile extends database{

    function viewspecdata($upid){
$this->profileq1 = "SELECT * FROM `user_login` WHERE user_id='$upid'";
$this->runpro= $this->connection->query($this->profileq1);
$fets = $this->runpro->fetch_assoc();
return $fets;

    }
    function updateprofile($post,$file,$updateid){
            $firstname = $post['first_name'];
            $last_name = $post['last_name'];
            $birthday = $post['birthday'];
            $phone = $post['phone'];
            $email = $post['email'];
            $passoword = $post['passoword'];
            $imgs = $file['imgs']['name'];
            move_uploaded_file($_FILES['imgs']['tmp_name'],"profilepic/".$imgs);
        $this->profileq2 = "UPDATE `user_login` SET `user_firstname`='$firstname',`user_lastname`='$last_name',`user_dob`='$birthday',`user_email`='$email',`user_password`='$passoword',`user_pic`='$imgs',`user_phoneno`='$phone' WHERE  user_id='$updateid'";
$this->runpro2= $this->connection->query($this->profileq2);
header("location:./profile.php");
    }

}



//////////////////// Contact page Module end