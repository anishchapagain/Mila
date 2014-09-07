<?php
error_reporting(1);
if(isset($_POST['fullname'])){
		
		require 'PHPMailer/PHPMailerAutoload.php';
		$name = $_POST['fullname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		//$file = $_FILES['file']['name'];
		//$tmp  = $_FILES['file']['tmp_name'];
		//$filename = time().'-'.$file;
		//$folder = 'cv';
		
		//move_uploaded_file($tmp,$folder.'/'.$filename);
		
		$message = $_POST['message'];
		$body = 'Name : '.$name.'<br>'.'Email : '.$email.'<br>'.'Phone :'.$phone.'<br>'.'Message : '.$message; 
		$mail = new PHPMailer;
		
		//$mail->isSMTP();                                     
		//$mail->Host = 'mail.nexstudios.com';  // Specify main and backup server					 

		$mail->From = $email;
		$mail->FromName = 'Mila Threading Enquiry';
		$mail->addAddress('jungrupak@gmail.com');  // Add a recipient
		$mail->addReplyTo($email);
		$mail->WordWrap = 120;                               // Set word wrap to 50 characters		         
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Mila Threading Enquiry';
		$mail->Body    = $body;
		//$mail->addAttachment('cv/'.$filename);
		$success = $mail->send();
		
		if($success) {
		 
		   header('location:index.php');
		
		}else{
			
			header('location:index.php');
		}
}else{
	
	header('location:index.php');
}

?>