<?php
include '../dbcon.php';
//$json = array("2014-05-30"=>array("number"=>""),"2014-05-30"=>array("number"=>""),"2014-05-26"=>array("number"=>""),"2014-05-03"=>array("number"=>""), "2014-05-12"=>array("number"=>""));
$json = array();


$id=$_REQUEST['id'];
$json['id']=$id;
// Query that retrieves events
$requete = mysql_query("SELECT maintanance_date FROM maintanance_details where property_id=".$id);
$requete2 = mysql_query("SELECT booking_from_date,booking_to_date FROM booking_details where property_id=".$id);
while($rs=mysql_fetch_assoc($requete)){
$json['json'][$rs['maintanance_date']]=array("number"=>"");
}/**/
// sending the encoded result to success page

echo json_encode($json);

?>