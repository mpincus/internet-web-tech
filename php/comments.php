	<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/comments.php';
 
sec_session_start();
error_reporting(0);
if($_GET['value']=='1') echo "<script>alert('Thanks for your shitty feedback')</script>";
?>
<!DOCTYPE html>
<!--comments-->
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <title>comments</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
<a href="index.php" id="logo"> </a>

<h1>Welcome to Richard Teabag's House of Cocks: Family-Style Restaurant</h1>

<h2>Meatballs for your mouth since 1995</h2>
<iframe src="navi.php" target="_parent"></iframe>
<h1>Comments Page</h1>

<p>Fill out this form if you have any feedback, it wont be read anyway</p>
<hr>
<form id="rForm" method="post" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" autocomplete="on">
<fieldset>
    <legend>Comments</legend>
    <!--			<form method = "post" action = "/">
                <input type = "hidden" name = "name" value = "name@name.com">
                <input type = "hidden" name = "subject" value = "feedback">
                <input type = "hidden" name = "redirect" value = "index.html"> -->
				
    <div class="row">
        <label>Name:</label>
        <input name="name" type="text" size="25" maxlength="30"value="<?php if(!empty($_SESSION['fname'])){
	$message = $_SESSION['fname'].' '.$_SESSION['lname'];
	echo $message; }?>"/>
    </div>
    <div class="row">
        <label>Email:</label>
        <input name="email" type="text" size="25" value="<?php if(!empty($_SESSION['db_email'])){
	$message = $_SESSION['db_email'];
	echo $message; }?>"/>
    </div>
    <div class="row">
        <label>Comments:</label>
        <textarea name="comments"
                  rows="4" cols="36">Enter Comments Here.</textarea>
    </div>

</fieldset>
<fieldset>
    <legend>Survey</legend>
    <h4> Things you liked:</h4> <br>

    <div class="checkbox">
        <input name="design" type="checkbox" value="1">
        <label>Site Design</label>
        <input name="links" type="checkbox" value="1">
        <label>Links</label>
        <input name="ease" type="checkbox" value="1">
        <label>Ease of use</label>
        <input name="images" type="checkbox" value="1">
        <label>Images</label>
        <input name="code" type="checkbox" value="1">
        <label>Source Code</label>
    </div>
    <h4>How did you find site?:</h4> <br>

    <div class="radio">
        <input name="search" type="radio" value="search engine" checked>
        <label>Search Engine</label>
        <input name="links" type="radio" value="link">
        <label>Links from another site</label>
        <input name="other" type="radio" value="other">
        <label>Other</label>
    </div>
    <div class="rating">
        <h4>Rate site:</h4>
        <select name="rating">
            <option selected> Amazing</option>
            <option>10</option>
            <option>9</option>
            <option>8</option>
            <option>7</option>
            <option>6</option>
            <option>5</option>
            <option>4</option>
            <option>3</option>
            <option>2</option>
            <option>1</option>
            <option>Aweful</option>
        </select>
    </div>
    <div class="buttonarea">
        <input type="submit" value="Submit">
        <input type="reset" value="Clear" onClick="return confirm('Are you sure?');">
    </div>
  
</fieldset>
  </form>
<fieldset>
    <legend>What Customers Are Saying</legend>
    <ul class="liststuff">
        <li>listing</li>
        <li>some</li>
        <li>stuff</li>
        <ol>
            <li>lists</li>
            <li>are</li>
            <li>not</li>
            <li>cool</li>
        </ol>
    </ul>
</fieldset>
</body>
<footer>
    <iframe src="navi.php" target="_parent"></iframe>
    <p class="copy">&copy; copywrite</p>
</footer>
</html>

