<?php 
include("./db-cont.php");
    
    session_destroy();
    header('location:./index.php');
?>