<?php
	$connection = mysql_connect("localhost", "root", "");
	if(!$connection)
	{
		die('Connection is not established'.mysql_error());
	}
	mysql_select_db("researchscholar", $connection);

	$register_no = $_POST['element_1'];
	$fname = $_POST['element_2_2'];
	$lname = $_POST['element_2_3'];	
	$ini = $_POST['element_2_4'];	
	$gender = $_POST['element_10'];
	$dd = $_POST['element_3_2'];
	$dm = $_POST['element_3_1'];
	$dy = $_POST['element_3_3'];
	$date = (string)$dy."-".(string)$dm."-".(string)$dd;
	$age = $_POST['element_4'];
	$datej = "2015-08-09";
	$dates = "2015-08-07";
	$email = $_POST['element_9'];

	if($gender == 1){
		$gender = 'M';
	}elseif($gender == 2){
		$gender = 'F';
	}else{
		$gender = 'O';
	}

	if ($register_no=="" || $fname=="" || $email == "" || $date == "" || $gender == ""){
		echo("Value Cannot Be Null");
		exit();
	}else{
		$insert = "INSERT INTO `researchscholar`.`personal_details` (`REG_NO`, `FIRST_NAME`, `LAST_NAME`, `NAME_INITIAL`, `GENDER`, `DOB`, `AGE`, `EMAIL_ID`, `DO_OPEN_SEMINAR`, `DO_JOINING_PHD`) VALUES ('$register_no', '$fname', '$lname', '$ini', '$gender', '$date', '$age', '$email', '$dates', '$datej')";
	}
	if(!mysql_query($insert,$connection)){
		die('Error'.mysql_error());
	}else{
		echo "SUCCESSFULLY REGISTERED";
	}
	mysql_close($connection);

?>