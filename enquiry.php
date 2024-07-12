<?php
if(isset($_POST['submit'])){
$tourname=$_POST['tourname'];
$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$tourdate=$_POST['tourdate'];
    $adult=$_POST['adult'];
    $child=$_POST['child'];
	$message=$_POST['message'];
	$ip=$_SERVER['REMOTE_ADDR'];
    $page=$_SERVER['HTTP_REFERER'];
    
    
$to = 'tajmahalprivatetour@gmail.com, '.$email.'';
$subject='Tour Enquiry';
$reply="Thankyou for submitting.";
$headers = 'From:'. $email . "\r\n" .

'Reply-To: ' . "\r\n" .

'X-Mailer: PHP/' . phpversion();

 mail($to, $subject, "Tour Name: $tourname\n\nName: $name \n\nEmail Address: $email\n\nMobile Number: $mobile\n\nTour Date: $tourdate\n\nAdult: $adult\n\nChild: $child\n\nMessage: $message\n\nIP: $ip\n\n",$headers);
 echo '<p class="alert alert-success">Thankyou For Enquiry.</p>';
 print "<meta http-equiv=\"refresh\"content=\"1; URL=#\">";

}
?>