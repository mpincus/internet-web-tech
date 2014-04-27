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
	$design = filter_input(INPUT_POST, 'design', FILTER_SANITIZE_STRING);
	$links = filter_input(INPUT_POST, 'links', FILTER_SANITIZE_STRING);
	$ease = filter_input(INPUT_POST, 'ease', FILTER_SANITIZE_STRING);
	$images = filter_input(INPUT_POST, 'images', FILTER_SANITIZE_STRING);
	$code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
	$search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
	$linkss = filter_input(INPUT_POST, 'links', FILTER_SANITIZE_STRING);
	$other = filter_input(INPUT_POST, 'other', FILTER_SANITIZE_STRING);
	$rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
	//	$times = $time.' '.$ampm;
	$found='';
	if(!empty($search)) $found = $search;
	elseif(!empty($linkss)) $found = $linkss;
	elseif(!empty($other)) $found = $other;
	
	if($design != '1') $design = '0';
	if($links != '1') $links = '0';
	if($ease != '1') $ease = '0';
	if($images != '1') $images = '0';
	if($code != '1') $code = '0';
 
 debug_to_console($design);
 //exit();
    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //


 
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.
 
    if (empty($error_msg)) {


        // Insert the new user into the database 
             if ($insert_stmt = $mysqli->prepare("INSERT INTO comments (name, email, comments, liked1, liked2, liked3, liked4, liked5, found, rating) VALUES (?,?, ?, ?, ?, ?,?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssssssss', $username, $email,  $comments, $design,$links,$ease,$images,$code,$found,$rating);
			//echo "<script>console.log("$username . '\n' . $email .'\n'. $password.'\n'. $random_salt.'\n'. $fname.'\n'. $lname.'\n'. $phone")</script>";
			
				//echo "<script>console.log(".print_r($insert_stmt).")</script>";
			//echo "<script>console.log(".$username.$comments.$year.$month.$day.$times.$phone.");</script>";
             //Execute the prepared query.
			
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');

            }
			else{//header('Location: ./register_success.php');
			header('Location: ./comments.php?value=1');
			}
		}
        
		
        
    }
}
