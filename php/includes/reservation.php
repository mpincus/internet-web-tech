<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'includes/functions.php';
//sec_session_start();
//session_start();

//$_SESSION['blahblah'] = "1";
$error_msg = "";
//echo "<script>console.log(".$_SESSION['blahblah'].");</script>";
 $info='';
 function debug_to_console($data) {
    if(is_array($data) || is_object($data))
	{
		echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('PHP: ".$data."');</script>");
	}
}
if (isset($_POST)) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
	$year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
	$month = filter_input(INPUT_POST, 'months', FILTER_SANITIZE_STRING);
	$day = filter_input(INPUT_POST, 'day', FILTER_SANITIZE_STRING);
	$time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING);
	$ampm = filter_input(INPUT_POST, 'ampm', FILTER_SANITIZE_STRING);
	$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
	$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
		$times = $time.' '.$ampm;
 
 
    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
	$prep_stmt = "SELECT SUM(partysize) FROM reservations WHERE year = ? AND month = ? AND day = ? AND time = ?";
    $stmt = $mysqli->prepare($prep_stmt);
	
     if ($stmt) {
        $stmt->bind_param('ssss', $year,$month,$day,$times);
		$stmt->execute();   
		$result = $stmt->get_result();
		$info = $result->fetch_array();

//exit();
//debug_to_console($info);
        if ($info['0'] > '100') {
			if($comments == '') $comments=1;
			header('Location: ./reservation.php?value=maxsize&comments='.$comments.'&year='.$year.'&month='.$month.'&day='.$day.'&time='.$time.'&ampm='.$ampm.'');
            $error_msg = $stmt->get_result();
		debug_to_console($info);
exit();
        }
		}

 
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.
 
    if (empty($error_msg)) {


        // Insert the new user into the database 
             if ($insert_stmt = $mysqli->prepare("INSERT INTO reservations (name, email, comments, year, month, day, time, phone, partysize) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssssssss', $username, $email,  $comments, $year, $month, $day, $times, $phone,$size);
			//echo "<script>console.log("$username . '\n' . $email .'\n'. $password.'\n'. $random_salt.'\n'. $fname.'\n'. $lname.'\n'. $phone")</script>";
			
				//echo "<script>console.log(".print_r($insert_stmt).")</script>";
			//echo "<script>console.log(".$username.$comments.$year.$month.$day.$times.$phone.");</script>";
             //Execute the prepared query.
			
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');

            }
			else{//header('Location: ./register_success.php');
			header('Location: ./reservation.php?value=1');
			}
		}
        
		
        
    }
}
