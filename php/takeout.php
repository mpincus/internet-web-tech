	<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/reservation.php';
 
sec_session_start();

?>
<!DOCTYPE html>
<!--takeout-->

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <title>TakeOut</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script src="js/takeout.js"></script>
			<script type="text/javascript">
    window.setTimeout(function() { window.location.href = "logout.php"; }, 60000*5);
</script>
</head>
<body>
<a href="index.php" id="logo"> </a>

<h1>Welcome to Richard Teabag's House of Cocks: Family-Style Restaurant</h1>

<h2>Meatballs for your mouth since 1995</h2>
<iframe src="navi.php" target="_parent"></iframe>
<h1>TakeOut</h1>
<hr>
<p>Go to: <a href=#Monday> <em>Monday</em></a>
    <a href=#Tuesday> <em>Tuesday</em></a>
    <a href=#Wednesday> <em>Wednesday</em></a>
    <a href=#Thursday> <em>Thursday</em></a>
    <a href=#Friday> <em>Friday</em></a>
    <a href=#Saturday> <em>Saturday</em></a>
    <a href=#Sunday> <em>Sunday</em></a></p>
<hr>
<br>

<fieldset>
    <legend>Reservation</legend>
    <form id="tForm" method="post" autocomplete="on" onSubmit="return takeOut();">

        <table border="1">
            <thead>
            <tr>
                <th colspan="6">MY WEEKLY MENU SPECIALS</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td rowspan="1"><a id=Monday>M<br>o<br>n<br>d<br>a<br>y</a></td>
                <td>Sweaty Balls</td>
                <td>Spicey Meatball Sandwich</td>
                <td>$1.00</td>
                <td><img src="http://res2.windows.microsoft.com
						/resbox/en/windows/main/eb4f0171-7cb7-428a-afcc-d93a6b84525c_33.png" id="picture"
                         title="something"
                         alt="vwrwwvr"
                         height="100" width="100"></td>
                <td><input type="checkbox" name="sweatyballs" id="sweatyballs" value="1.00"></td>
            </tr>
            <tr>
                <td rowspan="1"><a id=Tuesday>T<br>u<br>e<br>s<br>d<br>a<br>y</a></td>
                <td>Pene con Bolas</td>
                <td>A spanish dish</td>
                <td>$1.00</td>
                <td><img src="http://res1.windows.microsoft.com/resbox/en
						/windows/main/e9979a8b-c439-452a-a09f-d3b32df0e5b1_13.png" id="picture" alt="wwfewf"
                         height="100"
                         width="100"></td>
                <td><input type="checkbox" name="pb" id="pb" value="1.00"></td>
            </tr>
            <tr>
                <td rowspan="1"><a id=Wednesday>W<br>e<br>d<br>n<br>e<br>s<br>d<br>a<br>y</a></td>
                <td>Jamacaican Cock Soup</td>
                <td>Signature dish of the House of Cocks</td>
                <td>$1.00</td>
                <td><img src="img/cocksoup.jpg" id="picture" title="cocksoup" alt="CockSoup" height="100" width="100">
                </td>
                <td><input type="checkbox" name="cocksoup" id="cocksoup" value="1.00"></td>
            </tr>
            <tr>
                <td rowspan="1"><a id=Thursday>T<br>h<br>u<br>r<br>s<br>d<br>a<br>y</a></td>
                <td>Cockmeat Sandwich</td>
                <td>A chicken cutlet, on any choice of bread, with extra mayo.</td>
                <td>$1.00</td>
                <td><img src="img/cockmeat.jpg" id="picture" title="cockmeatsandwich" alt="cockmeatsandwich"
                         height="100" width="100">
                </td>
                <td><input type="checkbox" name="cockmeat" id="cockmeat" value="1.00"></td>
            </tr>
            <tr>
                <td rowspan="1"><a id=Friday>F<br>r<br>i<br>d<br>a<br>y</a></td>
                <td>Chef's Chocoate Salty Balls</td>
                <td>Self-explainatory</td>
                <td>$1.00</td>
                <td><img src="img/chocoballs.jpg" id="picture" title="chocolatesaltyballs" alt="chocolatesaltyballs"
                         height="100"
                         width="100"></td>
                <td><input type="checkbox" name="chef" id="chef" value="1.00"></td>
            </tr>
            <tr>
                <td rowspan="1"><a id=Saturday>S<br>a<br>t<br>u<br>r<br>d<br>a<br>y</a></td>
                <td>Linux Cheese Cream</td>
                <td>Linux is awesome</td>
                <td>$1.00</td>
                <td><img src="img/linux.jpg" id="picture" title="linux" alt="linux" height="100" width="100"></td>
                <td><input type="checkbox" name="linux" id="linux" value="1.00"></td>
            </tr>
            <tr>
                <td rowspan="1"><a id=Sunday>S<br>u<br>n<br>d<br>a<br>y</a></td>
                <td>Fish Balls</td>
                <td>Balls of Fish</td>
                <td>$1.00</td>
                <td><img src="img/fishballs.jpg" id="picture" title="fishballs" alt="fishballs" height="100"
                         width="100"></td>
                <td><input type="checkbox" name="fishballs" id="fishballs" value="1.00"></td>
            </tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
        <br>

        <div class="row">
            <label>Name:</label>
            <input name="name" id="name" value="<?php if(!empty($_SESSION['fname'])){
	$message = $_SESSION['fname'].' '.$_SESSION['lname'];
	echo $message; }?>" type="text" size="25" maxlength="30" required="true"/>
        </div>
		  <div class="row">
            <label>Email:</label>
            <input name="email" type="text" size="25" required="true" value="<?php if(!empty($_SESSION['db_email'])){
	$message = $_SESSION['db_email'];
	echo $message; }?>"/>
        </div>
        <div class="row">
            <label>Telephone Number:</label>
            <input type='tel' id="tel" required="true"  value="<?php if(!empty($_SESSION['phone'])){
	$message = $_SESSION['phone'];
	echo $message; }?>" pattern='[\(]??\d{3}[\)]??\d{3}[\-]??\s*\d{4}'
                   placeholder="Phone Number (Format: (999)999-9999)">
        </div>
        <div class="row">
            <label>Delivery?:</label>
            <input name="deliv" id="deliv" type="checkbox" onchange="delivary();"/>
        </div>
        <div id="delivYes">
            <!--    <div class="row">
                    <label>Address:</label>
                    <input name="address" id="address" type="text" size="25" maxlength="30" disabled="disabled"/>
                </div>
                <div class="row">
                    <label>Town:</label>
                    <input name="town" id="town" required="true" type="text" size="25" maxlength="30" disabled="disabled"/>
                </div> -->
        </div>

        <br>

        <div class="buttonarea">
            <input type="submit" value="Submit"/>
            <input type="reset" value="Clear" onClick="return confirm('Are you sure?');"/>
        </div>
    </form>
</fieldset>

</body>
<footer>
    <iframe src="navi.php" target="_parent"></iframe>
    <p class="copy">&copy; copywrite</p>
</footer>
</html>
