<!DOCTYPE html>
<!--specials-->

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <title>Nutrition</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script src="js/nutrition.js"></script>
</head>
<body>
<a href="index.php" id="logo"> </a>

<h1>Welcome to Richard Teabag's House of Cocks: Family-Style Restaurant</h1>

<h2>Meatballs for your mouth since 1995</h2>
<iframe src="navi.php" target="_parent"></iframe>
<h1>Nutrition</h1>

<hr>
<div id="recipe_pics">
    <img id="sweatyballs"
         src="http://res2.windows.microsoft.com/resbox/en/windows/main/eb4f0171-7cb7-428a-afcc-d93a6b84525c_33.png">
    <img id="peneconbolas"
         src="http://res1.windows.microsoft.com/resbox/en/windows/main/e9979a8b-c439-452a-a09f-d3b32df0e5b1_13.png">
    <img id="cocksoup" src="img/cocksoup.jpg">
    <img id="cockmeat" src="img/cockmeat.jpg">
    <img id="chocoballs" src="img/chocoballs.jpg">
    <img id="linux" src="img/linux.jpg">
</div>
<hr>
<fieldset>
    <legend>Nutrition</legend>
    <form id="tForm" method="post" autocomplete="on" onSubmit="return getInfo();">
       <!-- <input type='text' id='dish' list='dishes' placeholder='select a dish'/>
        <datalist id='dishes'>
            <option value='sweaty balls'> Sweaty Balls</option>
            <option value='pene con bolas'>pene con bolas</option>
            <option value='cock soup'> cock soup</option>
            <option value='cock meat'> cockmeat sandwich</option>
            <option value='choco balls'> chef's chocolate salty balls</option>
            <option value='linux'> linux cheese</option>
        </datalist>
-->
        <div class="row">
            <label for="txtlist">Dishes:</label>
            <!--	<input type="text" name="months" id="months" placeholder="Select a month" list="months" required="true" /> -->
            <select id="dish" onchange="getInfo()">
                <option selected="selected">--Select Dish--</option>
                <option>sweaty balls</option>
                <option>pene con bolas</option>
                <option>cock soup</option>
                <option>cock meat</option>
                <option>choco balls</option>
                <option>linux</option>
            </select>
        </div>
        <div id="contentArea">

            <div id="name"></div>
            <div id="a"></div>
            <div id="b"></div>
            <div id="c"></div>
            <div id="d"></div>
        </div>
    </form>
</fieldset>
<br>
</body>
<footer>
    <iframe src="navi.php" target="_parent"></iframe>
    <p class="copy">&copy; copywrite</p>
</footer>
</html>
