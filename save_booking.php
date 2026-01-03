<?php
include 'db.php';
$name = $_POST['fullname'];
$prog = $_POST['program'];
$date = $_POST['date'];
$time= $_POST['time'];

$query = "INSEERT INTO booking (fullname , program , booking_date , booking_time)VALUES ('$name','$prog','$date','$time')";

if(mysqli_query($conn,$query)){
    echo json_decode(["status"=> "success","message"=>"Done"]);
}else{
    echo json_decode(["status"=>"error"]);
}
?>