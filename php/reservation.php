	<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/reservation.php';
 
sec_session_start();
error_reporting(0);
if((isset($_GET))&&($_GET['value']=='maxsize') && (isset($_GET['year']))){
$error_msg = 'Max Capacity Reached for This Time. Try a later Time.'; }
else { $error_msg='';}
?>
<!--reservation-->
<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Reservation</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <div class="emailCheck">
        <script src="js/formValid.js"></script>
				<script type="text/javascript">
    window.setTimeout(function() { window.location.href = "logout.php"; }, 60000*5);
</script>
    </div>
</head>
<body>
<a href="index.php" id="logo"> </a>

<h1>Welcome to Richard Teabag's House of Cocks: Family-Style Restaurant</h1>

<h2>Meatballs for your mouth since 1995</h2>
<iframe src="navi.php" target="_parent"></iframe>
<h1>Reservations</h1>
       <?php
        if (!empty($error_msg)) {
            print '<script type="text/javascript">';
print 'alert("'. $error_msg.'")';
print '</script>';  
			$error_msg='';
        }
        ?>
<hr>
<p>To place a reservation fill out the form below.</p>
<fieldset>
    <legend>Reservation</legend>
    <form id="rForm" method="post" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" autocomplete="on">
        <div class="row">
            <label>Name:</label>
            <input name="name" type="text" size="25" maxlength="30" id="username" placeholder="User Name"
                   required="true" value="<?php if(!empty($_SESSION['fname'])){
	$message = $_SESSION['fname'].' '.$_SESSION['lname'];
	echo $message; }?>">
        </div>
        <div class="row">
            <label>Email:</label>
            <input name="email" type="text" size="25" required="true" value="<?php if(!empty($_SESSION['db_email'])){
	$message = $_SESSION['db_email'];
	echo $message; }?>"/>
        </div>
        <div class="row">
            <label>Comments:</label>
            <textarea name="comments" value="<?php if(isset($_GET['comments'])){echo $_GET['comments'];}?>" rows="4" cols="36"></textarea>
        </div>
        <div class="row">
            <label for="txtyear">Year:</label>
            <input type="text" name='year' id="year" value="<?php if(isset($_GET['year'])){echo $_GET['year'];}?>" placeholder="Select a year" required="true"/>
        </div>
        <div class="row">
            <label for="txtlist">Months:</label>
            <!--	<input type="text" name="months" id="months" placeholder="Select a month" list="months" required="true" /> -->
            <select name='months' id="months" value="<?php if(isset($_GET['month'])){echo $_GET['month'];}?>">
                <option <?php if(($_GET['month']=='January')){echo 'selected';}?>>January</option>
                <option <?php if(($_GET['month']=='February')){echo 'selected';}?>>February</option>
                <option <?php if(($_GET['month']=='March')){echo 'selected';}?>>March</option>
                <option <?php if(($_GET['month']=='April')){echo 'selected';}?>>April</option>
                <option <?php if(($_GET['month']=='May')){echo 'selected';}?>>May</option>
                <option <?php if(($_GET['month']=='June')){echo 'selected';}?>>June</option>
                <option <?php if(($_GET['month']=='July')){echo 'selected';}?>>July</option>
                <option <?php if(($_GET['month']=='August')){echo 'selected';}?>>August</option>
                <option <?php if(($_GET['month']=='September')){echo 'selected';}?>>September</option>
                <option <?php if(($_GET['month']=='October')){echo 'selected';}?>>October</option>
                <option <?php if(($_GET['month']=='November')){echo 'selected';}?>>November</option>
                <option <?php if(($_GET['month']=='December')){echo 'selected';}?>>December</option>
            </select>
        </div>
        <div class="row">
            <label for="txtnum">Days:</label>
            <input type="text" name="day" id="day" value="<?php if(isset($_GET['day'])){echo $_GET['day'];}?>"placeholder="Select a day" list="day" required="true"/>
            <datalist id="day">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
                <option value="5">
                <option value="6">
                <option value="7">
                <option value="8">
                <option value="9">
                <option value="10">
                <option value="11">
                <option value="12">
                <option value="13">
                <option value="14">
                <option value="15">
                <option value="16">
                <option value="17">
                <option value="18">
                <option value="19">
                <option value="20">
                <option value="21">
                <option value="22">
                <option value="23">
                <option value="24">
                <option value="25">
                <option value="26">
                <option value="27">
                <option value="28">
                <option value="29">
                <option value="30">
                <option value="31">
            </datalist>
        </div>
        <div class="row">
            <div class="time">
                <label for="txttime">Time:</label>
                <input type="text" name="time" id="time" value="<?php if(isset($_GET['time'])){echo $_GET['time'];}?>" placeholder="Select a time" required="true"/>
                <select name="ampm" id="ampm">
                    <option <?php if(($_GET['ampm']=='AM')){echo 'selected';}?>>AM</option>
                    <option <?php if(($_GET['ampm']=='PM')){echo 'selected';}?>>PM</option>
                </select>
            </div>
        </div>

        <div class="row">
            <label for="tele">Telephone Number:</label>
            <input type='tel' name='phone' id='phone' pattern='[\(]??\d{3}[\)]??\d{3}[\-]??\s*\d{4}'
                   placeholder="Phone Number (Format: (999)999-9999)" value="<?php if(!empty($_SESSION['phone'])){
	$message = $_SESSION['phone'];
	echo $message; }?>">
        </div>
		<div class='row'>
			<label>Party Size</label>
			<input type='text' name='size' id='size' required='true'>
		</div>
        <div class="buttonarea">
            <input type="submit" value="Submit"  onclick='return validateDate();'/>
            <input type="reset" value="Clear" onClick="return confirm('Are you sure?');"/>
        </div>
        <div id="reservationsDisclaimer"> ffms dlkmsdf wepof w afafmposd poef spmas f mklfwe iasdodfij fsmfdose asmdfksl
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
error_reporting(0);
if((isset($_GET)) && ($_GET['value']=='1') ){
echo '<script type="text/javascript">rc();</script>';

}





?>
