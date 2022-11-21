<?php
require_once('./db-cont.php');
require_once('./vendor/autoload.php');
if (isset($_GET['pdfid'])) {
//    echo $_GET['pdfid'];
}


// use ;
$mpdf = new mPDF\mPDF;
$mpdf->WriteHTML('<h1>Hello world!</h1>' , 'D');
$mpdf->Output();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pdf</title>
</head>
<body>
    <table style="border: 1px solid gray;">
        
          <tr ><th style="border: 1px solid gray;"> Name : <th style="border: 1px solid gray;"> Name :</th></th></tr>
          <tr > <th style="border: 1px solid gray;"> Phone no :<th style="border: 1px solid gray;"> Name :</th></th></tr>
          <tr > <th style="border: 1px solid gray;"> Address :<th style="border: 1px solid gray;"> Name :</th></th></tr>
          <tr > <th style="border: 1px solid gray;"> Room name :<th style="border: 1px solid gray;"> Name :</th></th></tr>
          <tr > <th style="border: 1px solid gray;"> Room No :<th style="border: 1px solid gray;"> Name :</th></th></tr>
          <tr > <th style="border: 1px solid gray;"> Room price / night :<th style="border: 1px solid gray;"> Name :</th></th></tr>
          <tr > <th style="border: 1px solid gray;"> Total Price :<th style="border: 1px solid gray;"> Name :</th></th></tr>
          <tr > <th style="border: 1px solid gray;"> Check_in :<th style="border: 1px solid gray;"> Name :</th></th></tr>
          <tr > <th style="border: 1px solid gray;"> check_out :<th style="border: 1px solid gray;"> Name :</th></th></tr>



         
        
    </table>
</body>
</html>
<?php



?>