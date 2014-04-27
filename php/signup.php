<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<!--signup-->
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>signup</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script src="js/signin.js"></script>
	        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
</head>
<body>
<a href="index.php" id="logo"> </a>

<h1>Welcome to Richard Teabag's House of Cocks: Family-Style Restaurant</h1>

<h2>Meatballs for your mouth since 1995</h2>
<iframe src="navi.php" target="_parent"></iframe>
<h1>Signup Page</h1>
<hr>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
<fieldset>
    <legend>SignUp</legend>
    <form name="registration_form" id="register" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" onSubmit="return signupMsg();"  >
        <div class="row">
            <label>Username</label>
            <input type="text" name="username" id="username" required="true"/>
        </div>
		<div class='row'>
		<label>First Name</label>
		<input type='text' name='fname' id='fname' required="true"/>
		</div>
		<div class='row'>
		<label>Last Name</label>
		<input type='text' name='lname' id='lname' required="true"/>
		</div>
		<div class="row">
            <label> Email</label>
            <input type="email" name="email" id='email' required="true"/>
        </div>
        <div class="row">
            <label>Password</label>
            <input type="password" name="password" id="password" required="true"
                  <?php /*pattern="(?=^.{6,20}$)(?=(?:.*?\d){2})(?=.*[a-z])(?=(?:.*?[A-Z]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){2})(?!.*\s)[0-9a-zA-Z!@#$%*()_+^&]*$" */?>
                   placeholder="6-20 characters. atleast 1 special, atleast 2 digit, atleast 2 uppercase"/>
        </div>
        <div class="row">
            <label> Confirm Password</label>
            <input type="password" name="confirmpwd" id="confirmpwd" required="true"
			<?php
			/*pattern="(?=^.{6,20}$)(?=(?:.*?\d){2})(?=.*[a-z])(?=(?:.*?[A-Z]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){2})(?!.*\s)[0-9a-zA-Z!@#$%*()_+^&]*$" */?>
                   placeholder="6-20 characters. atleast 1 special, atleast 2 digit, atleast 2 uppercase"/>
        </div>
		<div class='row'>
			<label>Phone Number</label>
			<input type='text' name='phone' id='phone'/>
		</div>

        <div class="buttonarea">
            <input type="button" value="Register" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd,
								   this.form.fname,
								   this.form.lname,
								   this.form.phone);"/>
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
