	<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();

?>
<!DOCTYPE html>

<!-- index.html -->
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Richard Teabag's House of Cocks</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <div class="quotes">
        <script src="js/randQuote.js"></script>
        <script src="js/signin.js"></script>
				<script type="text/javascript">
    window.setTimeout(function() { window.location.href = "logout.php"; }, 60000*5);
</script>
    </div>
</head>
<body onload="javascript:loggedInMsg()">
<a href="index.php" id="logo"> </a>
<div class='logout'>
<a href='logout.php'>Logout</a>
</div>
<h1>Welcome to Richard Teabag's House of Cocks: Family-Style Restaurant</h1>

<h2>Meatballs for your mouth since 1995</h2>

<div id="userMsg">
<?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['fname'].' '.$_SESSION['lname']); ?>!</p>
        <?php else : ?>
            <p>
                <span class="error"> Please login</span>
            </p>
        <?php endif; ?>
</div>
<iframe src="navi.php" target="_parent"></iframe>

<p>Teabags is credited with serving the finest chicken and man-sized meatballs anywhere.<br>
    For breakfast, lunch and dinner, we serve meatballs all day everyday.</p>
<hr>
<p>Please use the above links to navigate the website. Hover over the links to find its decription <br>
    <mark>Marking up some shit</mark>
</p>
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
<div id="melting">
    <img class="chik" src="img/chicken.jpg">
</div>
</body>
<footer>
    <iframe src="navi.php" target="_parent"></iframe>
    <p class="copy">&copy; copywrite</p>
</footer>
</html>
