	<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();

?>
<!DOCTYPE html>
<!--signin-->
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>signin</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script src="js/signin.js"></script>
	<script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
	
	


</head>
<body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
<a href="index.php" id="logo"> </a>

<h1>Welcome to Richard Teabag's House of Cocks: Family-Style Restaurant</h1>

<h2>Meatballs for your mouth since 1995</h2>
<iframe src="navi.php" target="_parent"></iframe>
<h1>Login Page</h1>
<hr>
<div class="top"></div>
<div class="middle"></div>
<div class="bottom"></div>
<?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['fname'].' '.$_SESSION['lname']); ?>!</p>
        <?php else : ?>
            <p>
                <span class="error"> Please login</span>
            </p>
        <?php endif; ?>
<fieldset>
    <legend>Login</legend>
    <form name="login_form" id="login" action="includes/process_login.php" method="post" onSubmit="return signupMsg();">
        <div class="row">
		<!--
            <label>Username</label>
            <input type="text" name="userid" id="userid" required="true"/>
			
        </div>
        <div class="row">
            <label>Password</label>
            <input type="password" name="pswrd"
                   pattern="(?=^.{6,20}$)(?=(?:.*?\d){2})(?=.*[a-z])(?=(?:.*?[A-Z]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%*()_+^&]*$"
                   required="true"
                   placeholder="6-20 characters. atleast 1 special, atleast 2 digit, atleast 2 uppercase">
		-->
		<label>Email:</label> <input type="text" name="email" value="<?php if(!empty($_SESSION['emailstuff'])){
	$message = $_SESSION['emailstuff'];
	echo $message; }?>" />

        </div>
		<div class='row'>
		            <label>Password:</label> <input type="password" 
                             name="password" 
                             id="password" pattern="^(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?=.*[a-z])(?=.*[A-Z])(?i-msnx:(?!.*pass|.*password|.*word|.*god|.*\s))(?!^.*\n).*$" />
							 </div>
        <div class="buttonarea">
            <input type="submit" value="Login" onclick="formhash(this.form, this.form.password);"/>
            <input type="reset" value="Cancel" onClick="return confirm('Are you sure?');"/>
        </div>
    </form>
</fieldset>
</body>
<footer>
    <iframe src="navi.php" target="_parent"></iframe>
    <p class="copy">&copy; copywrite</p>

</footer>
</html>
<?php
//session_start();
if(!empty($_SESSION['emailstuff'])){
echo "<script>alert('User cannot be found');</script>";
$_SESSION['emailstuff']='';}
?>
	
