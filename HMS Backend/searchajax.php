<?php
require_once('./db-cont.php');
$obj = new booker();

if (isset($_POST['Myval'])) {
     $searchval =  $_POST['Myval'];
     $valss =  $obj->search($searchval);
     if ($valss==null) {
        echo "no data is found";
     }else{
         foreach ($valss as $key ) {
            //  echo  $key['Booker_name'];
            //  echo  $key['Booker_name'];
            // $valuew1 = $obj->bookingdataget();
            if ($key['arrival'] == 0 && $key['bookin_status'] == "Pending") {
        
          echo  $revallue = "
          <table table  table-striped >
          <tr>
            <td scope='col'>#</td>
            <td>
                <span class='badge bg-success  text-uppercase' style='font-size: 16px;'>Booking_id : <span class='text-capitalize'>#_ $key[bookin_id] </span></span>
                <p class='mt-3 text-uppercase'>Name : <span class='font-weight-light text-capitalize'> $key[Booker_name] </span></p>
                <p class='mt-3 text-uppercase'>Phone# : <span class='font-weight-light text-capitalize'> $key[Booker_phone] </span></p>

            </td>
            <td>

                <p class='mt-3 text-uppercase'>Room Name : <span class='font-weight-light text-capitalize'> $key[room_name] </span></p>
                <p class='mt-3 text-uppercase'>Price : <span class='font-weight-light text-capitalize'> $key[room_price]  /Night</span></p>

            </td>
            <td>
                <p class='mt-3 text-uppercase'>Check_in : <span class='font-weight-light text-capitalize'> $key[check_in] </span></p>
                <p class='mt-3 text-uppercase'>Check_out : <span class='font-weight-light text-capitalize'> $key[check_out] </span></p>
                <p class='mt-3 text-uppercase'>Amount : <span class='font-weight-light text-capitalize'>Faizan</span></p>
                <p class='mt-3 text-uppercase'>Payment_method : <span class='font-weight-light text-capitalize'> $key[Payment_method] </span></p>
                <p class='mt-3 text-uppercase'>Date : <span class='font-weight-light text-capitalize'> $key[date_time] </span></p>

            </td>
            <td>
                <a href='./updatebooking.php?asignid= $key[bookin_id] '><button class='btn btn-success btn-sm'> <i class='fa-sharp fa-solid fa-diamond-turn-right'></i>Assign Room</button></a><BR></BR>
                <a href='./bookings.php?cancelid= $key[bookin_id] '> <button class='btn btn-danger btn-sm'> <i class='fa-sharp fa-solid fa-trash'></i>Cancle Booking</button></a>

            </td>

        </tr>
        </table>
        ";
         }
     }
    }
    }

// 
