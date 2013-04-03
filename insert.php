<?php 
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("dbconnection.php");
$ques=$_GET['question1'];
$name=$_GET['fname'];
//$feedback=$_POST[''];
$state=$_GET['state'];
$country=$_GET['country'];
$email=$_GET['email'];
$u_id=$_GET['uid'];
$date=date("Y-m-d H-i-s");
mysql_query("insert into `feedback` set `user_id`='$u_id',`ques`='$ques',`name`='$name',`state`='$state',`country`='$country',`email`='$email',`created`='$date'");

$subj="$ques";

$message="$ques\r\n";

$subj="New Feedback Received";

$message="You have Received a new feedback\r\n from:$name \r\n state:$state \r\n country:$country \r\n email: $email \r\n The feedback is about: $ques..";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From:feedback@mythinkingcap.net\n";


$to="sukalyan.ds@gmail.com,powerfultools4life@gmail.com,sukalyan.ds@krititech.in";

mail($to,$subj,$message,$headers);
?>
({
"status":"1"

})