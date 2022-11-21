<?php
require_once('./database.php');
if (isset($_POST['checkin'])) {
        $currentdate = new DateTime(date('Y-m-d'));
        $check_in =new DateTime($_POST['checkin']) ;
        $check_out = new DateTime($_POST['checkout']) ;
       $room_price = $_POST['roomprice'] ;

        
        if ($check_in==$check_out) {
           echo $returnvalue=1;
        }elseif ($check_in>$check_out) {
          echo  $returnvalue=2;
        }elseif($currentdate>$check_in){
          echo $returnvalue=3;
        }else{
            $daycount = date_diff($check_in,$check_out)->days;
            $totalprice = $daycount*$room_price;
           $jsonresponse=json_encode(["day"=>$daycount,"Price"=>$totalprice]);
           echo $jsonresponse;
        }

        // echo $returnvalue="";
}
// echo "response is working";

?>