<?php
if( isset($_POST) ){
	//form validation variables
	$formok = true;
	$errors = array();

	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = strftime("%a, %d %B %Y");
	$time = strftime("%H:%M");

	//form data  
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = "denisademaku1@gmail.com"; //place your own email address here
	$subject = "Enquiry from Website Form 3"; //title/subject of your email

	//validate name is not empty
	if(empty($name)){
		$formok = false;
		$errors[] = "You have not entered a name";
	}

	//validate email address is not empty
	if(empty($email)){
		$formok = false;
		$errors[] = "You have not entered an email address";
	}
	//validate email address is valid
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$formok = false;
		$errors[] = "You have not entered a valid email address";
	}

	//validate message is not empty
	if(empty($message)){  
		$formok = false;
		$errors[] = "You have not entered a message";
	}
	//validate message is greater than 20 characters
	elseif (strlen($message) < 20){
		$formok = false;
		$errors[] = "Your message must be at least 20 characters long";
	}

	//send email if all is ok (form validation through browser)
	if($formok){
		$headers = "From: {$email}" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$emailbody = "<p>You have received a new message from the contact form on denisademaku1.com</p>
					<hr />
					<p><strong>Name/Company name: </strong> {$name} </p>
					<p><strong>Email Address: </strong> {$email} </p>
					<hr />
					<p><strong>Message: </strong></p>
					<p>{$message}</p>
					<hr />
					<p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>"; 
		mail($to,$subject,$emailbody,$headers);
	}

	//what we need to return back to our form  
	$returndata = array(
		'posted_form_data' => array(  
			'name' => $name,
			'email' => $email,
			'message' => $message
		),  
		'form_ok' => $formok,
		'errors' => $errors  
	);

	//if this is not an ajax request
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){  
		//set session variables
		session_start();
		$_SESSION['cf_returndata'] = $returndata;
		//redirect back to form
        header('location:index.php#contactform');
	}
}  