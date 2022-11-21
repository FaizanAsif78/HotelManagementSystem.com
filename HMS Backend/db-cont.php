<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;
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
    function updatesitesetting($post){
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
    function updatecontact($post){
        $hoteladress = $post['hoteladress'];
        $hotelphone = $post['hotelphone'];
        $hotelemail = $post['hotelemail'];
        $hotelwebsite = $post['hotelwebsite'];


        $this->query4 = "UPDATE `contactpage_info` SET `Hotel_address`='$hoteladress',`Hotel_phone`='$hotelphone',`Hotel_email`='$hotelemail',`Hotel_website`='$hotelwebsite' WHERE 1";
        $this->run4 = $this->connection->query($this->query4);
        
    }
}
//                      ///////////////// User query maoduls start


class userquery extends database{

    function viewcontactus(){
        $this->contactquery1="SELECT * FROM `contact_usdetails` WHERE 1";
        $this->contactrun1=$this->connection->query($this->contactquery1);
       
        while ($fet=$this->contactrun1->fetch_assoc()) {
           $data[]=$fet;
        }
        return @ $data;
    }

    function updatecontact($markid){
       
        $this->contactquery3 ="UPDATE `contact_usdetails` SET `read_status`='1' WHERE Contact_id='$markid'";
        $this->result3 = $this->connection->query($this->contactquery3);
    
}
    function deletecontact($delid){
       
        $this->contactquery4 ="DELETE FROM `contact_usdetails` WHERE Contact_id='$delid'";
        $this->result4 = $this->connection->query($this->contactquery4);
    
}

//                      ///////////////// User query maoduls end

}
//                      ///////////////// Faclity maoduls end
class Facility extends database{

    function insertfacility($post){
                $Facility = $post['facility'];
                $this->Facilityquery1 = "INSERT INTO `facility`( `faclity`) VALUES ('$Facility')" ;
                $this->runfaclity = $this->connection->query($this->Facilityquery1);
    }
    function viewfacility(){
        $this->facilityquery2 = "SELECT * FROM `facility` WHERE 1";
        $this->runfaclity2  = $this->connection->query($this->facilityquery2);
        while ($fets=$this->runfaclity2->fetch_assoc()) {
            $data[]=$fets;
        }
        return @$data;
    }
    function deletefacilty($delid){
        $this->Facilityquery3 = "DELETE FROM `facility` WHERE Facility_id='$delid'" ;
                $this->runfaclity3 = $this->connection->query($this->Facilityquery3);
    }
}
class Features extends database{

    function insertfeature($post){
                $Feature = $post['Feature'];
                $this->featurequery1 = "INSERT INTO `features`( `Feature`) VALUES ('$Feature')" ;
                $this->feature = $this->connection->query($this->featurequery1);
    }
    function viewfeature(){
        $this->facilityquery2 = "SELECT * FROM `features` WHERE 1";
        $this->runfaclity2  = $this->connection->query($this->facilityquery2);
        while ($fets=$this->runfaclity2->fetch_assoc()) {
            $data[]=$fets;
        }
        return @$data;
    }
    function deletefeature($delid){
        $this->featurequery3 = "DELETE FROM `features` WHERE feature_id='$delid'" ;
                $this->runfeature3 = $this->connection->query($this->featurequery3);
    }
}

class rooms extends database{
    function insertroomdata($postdata){
        $Roomname = $postdata['Uname'];
        $area = $postdata['area'];
        $Price = $postdata['Price'];
        $RoomQTy = $postdata['RoomQTy'];
        $adult = $postdata['adult'];
        $Children = $postdata['Children'];
        $feature = $postdata['feature'];
        $Facilitys = $postdata['Facilitys'];
        $roomdesc = $postdata['roomdesc'];
        $this->roomquery1= "INSERT INTO `rooms`( `room_name`, `room_area`, `room_price`, `room_qty`, `Adults`, `Childrens`, `room_description`, `room_status`)
         VALUES ('$Roomname','$area','$Price','$RoomQTy','$adult','$Children ','$roomdesc','1')";
         $this->roomrun = $this->connection->query($this->roomquery1);
          $myval = $this->connection->insert_id;
         if ($this->roomrun) {

            foreach ($feature as $value) {
                $this->roomquery2 ="INSERT INTO `room_feature`(`room_id`, `feature_id`)
                 VALUES ('$myval','$value')";
                 $this->runroom2 =$this->connection->query($this->roomquery2);
            }
            foreach ($Facilitys as $value2) {
                $this->roomquery3 ="INSERT INTO `room_facility`(`room_id`, `faclily_id`)
                 VALUES ('$myval ','$value2')";
                 $this->runroom3 =$this->connection->query($this->roomquery3);
            }
         }

    }
    function viewroomdata(){
        $this->viewroomquery = "SELECT * FROM `rooms` WHERE 1";
        $this->runviewroom = $this->connection->query($this->viewroomquery);
        while ($fet =$this->runviewroom->fetch_assoc() ) {
           $datas[] = $fet;
        }
        return @$datas;
    }
    function deleteroom($Room){
        $this->featurequery3 = "DELETE FROM `rooms` WHERE Room_id = '$Room'" ;
        $this->runfeature3 = $this->connection->query($this->featurequery3);
        if ($this->runfeature3) {
                $this->delquery3 = "DELETE FROM `room_facility` WHERE room_id = '$Room'" ;
                $this->rundel3 = $this->connection->query($this->delquery3);
                $this->delquery4 = "DELETE FROM `room_feature` WHERE room_id = '$Room'" ;
                $this->rundel4 = $this->connection->query($this->delquery4);
        }
    }

    function roomimage($getimg,$romid){
        $roomimg = $_FILES['roomsimages']['name'];
        if ($roomimg=="") {
            echo "enter the room image";
        }else{
        move_uploaded_file($_FILES['roomsimages']['tmp_name'],"./roomimages/".$roomimg);
        $this->imgquery1 = "INSERT INTO `room_image`( `room_id`, `room_img`) 
        VALUES ('$romid','$roomimg')";
                $this->imgrun = $this->connection->query($this->imgquery1);
            }
    }
    function vieroomimg($rooid){
        $this->viewroomquery = "SELECT * FROM `room_image` WHERE room_id = '$rooid' ";
        $this->runviewroom = $this->connection->query($this->viewroomquery);
        while ($fet =$this->runviewroom->fetch_assoc() ) {
           $datas[] = $fet;
        }
        return @$datas;
    }

    function deleteroomimage($imgid,$rmimgid){

        $values = $rmimgid;
        $this->delromimgquery3 = "DELETE FROM `room_image` WHERE room_img_id = '$imgid'" ;
                $this->runfeature3 = $this->connection->query($this->delromimgquery3);
                if ($this->runfeature3) {
                    header("location:./room_img.php?imgeid=$values");
                }
    }

    function updatethumbnail($thumbid,$roomid){

        // /////////////////////////update thumbnail query1
        $this->thumbquery = "UPDATE `room_image` SET `selcted_img`='0' WHERE room_id='$roomid'";
        $this->runthumb =   $this->connection->query($this->thumbquery);
        // /////////////////////////update thumbnail query2
        $this->thumbquery2 = "UPDATE `room_image` SET `selcted_img`='1' WHERE room_img_id='$thumbid'";
        $this->runthumb2 =   $this->connection->query($this->thumbquery2);
        if ($this->runthumb2) {
            header("location:./room_img.php?imgeid=$roomid");
        }
    }
}

//                      ///////////////// Faclity maoduls end
//                      /////////////////  booking  module strat

class booker extends database{
    function bookingdataget()
    {
        $this->bookingq1 = "SELECT * FROM `booking_orders` INNER JOIN `rooms` ON booking_orders.room_id=rooms.Room_id ";
        $this->bookingrun = $this->connection->query($this->bookingq1);
        while($fets =$this->bookingrun->fetch_assoc()){
                    $datas[]=$fets;
        }
        return $datas;
    }
    function cancelbooking($cancelid){
        $this->cancelbookq1 ="UPDATE `booking_orders` SET `bookin_status`='Cancelled' WHERE bookin_id='$cancelid'" ;
        $this->cancelrun = $this->connection->query($this->cancelbookq1);
    }
    function bookingupdate($post1,$updateid){
        $roomno = $post1['room_no'];
        $this->updatebookq1 ="UPDATE `booking_orders` SET `bookin_status`='Booked',`arrival`='1',`room_no`='$roomno' WHERE bookin_id='$updateid'" ;
        $this->cancelrun = $this->connection->query($this->updatebookq1);
        header("location:./bookings.php");
    }
    function search($searchval)
    {
        $this->bookingq1 = "SELECT * FROM `booking_orders`  INNER JOIN `rooms` ON booking_orders.room_id=rooms.Room_id WHERE booking_orders.bookin_id LIKE '%$searchval%' OR booking_orders.Booker_name LIKE'%$searchval%' ";
        $this->bookingruns = $this->connection->query($this->bookingq1);
        while($fetsmt =$this->bookingruns->fetch_assoc()){
            $datas[]=$fetsmt;
}
return @$datas;
        
    }
}


//                      /////////////////  booking  module end