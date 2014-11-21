<?php
include '../dbcon.php';
$bookingid= $_POST['bookingid'];
$fromdate= date("Y-m-d",strtotime($_POST['bfromdate']));
$todate= date("Y-m-d",strtotime($_POST['btodate']));
$q=mysql_query("insert into booking_details (property_id,booking_from_date,booking_to_date,booking_status)values($bookingid,'$fromdate','$todate',0)");
if($q!=FALSE)
{
echo "success";
}

?>