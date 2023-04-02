<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here

        $radioboxErr = $textErr = $nameErr = $numErr = $mailErr = "";
        $radiobox = $text = $name= $num = $mail="";
        
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
    if (empty($_POST["name"])){		
	    $nameErr = "Name is required";		
	} else {		
	    $name = input_data($_POST["name"]);	
		 	 if (!preg_match("/^[a-zA-Z ]*$/",$name)) { 
	        $nameErr = "Only alphabets and white space are allowed";		
	    }		
	}		
        if (empty($_POST["mobileno"])) {
	   	$mobilenoErr = "Mobile no is required";		
	} else {
	    $Telephone = input_data($_POST["mobileno"]);	
		   // check if mobile no is well-formed		
	    if (!preg_match ("/^[0-9]*$/", $Telephone) ) { 
	        $TelephoneErr = "*Only numeric value is allowed.";		
	    }
        }
if (!isset($_POST['radiobox'])){		

		$radioboxErr = "You must select hobby.";		

	}else{

		$radioboxErr = input_data($_POST["radiobox"]);	

	}
}
if (empty($_POST["mail"])) {		
	   $emailErr = "Email is required";		
	} else {
	   $email = input_data($_POST["mail"]);		

		 	 // check that the e-mail address is well-formed		

		 	 if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) { 
	        $emailErr = "Invalid email format";		
	    }
        }
        ?>
    </body>
</html>