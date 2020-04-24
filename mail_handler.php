<?php
	if(isset($_POST['submit'])){
		$Fname = $_POST['fname'];
		$Lname = $_POST['lname'];
		$Email = $_POST['email'];
		$sub = $_POST['Submessage'];
		$Message = $_POST['message'];
		$to='ali.bilal32@yahoo.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="First Name :".$Fname."\n"."Last Name :".$Lname."\n"."Subject:".$sub."Wrote the following :"."\n\n".$Message;
		$headers="From: ".$Email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>