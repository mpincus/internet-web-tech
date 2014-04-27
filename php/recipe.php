<!DOCTYPE html>
<!--specials-->

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <title>Recipes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">


    <script>


        var asyncRequest;

        function registerListeners() {
            var img;
            img = document.getElementById("sweatyballs");
            img.addEventListener("mouseover", function () {
                getContent("xml/sweatyballs.xml");
            }, false);
            img.addEventListener("mouseout", clearContent, false);
            img = document.getElementById("peneconbolas");
            img.addEventListener("mouseover", function () {
                getContent("xml/peneconbolas.xml");
            }, false);
            img.addEventListener("mouseout", clearContent, false);
            img = document.getElementById("cocksoup");
            img.addEventListener("mouseover", function () {
                getContent("xml/cocksoup.xml");
            }, false);
            img.addEventListener("mouseout", clearContent, false);
            img = document.getElementById("cockmeat");
            img.addEventListener("mouseover", function () {
                getContent("xml/cockmeat.xml");
            }, false);
            img.addEventListener("mouseout", clearContent, false);
            img = document.getElementById("chocoballs");
            img.addEventListener("mouseover", function () {
                getContent("xml/chocoballs.xml");
            }, false);
            img.addEventListener("mouseout", clearContent, false);
            img = document.getElementById("linux");
            img.addEventListener("mouseover", function () {
                getContent("xml/linux.xml");
            }, false);
            img.addEventListener("mouseout", clearContent, false);
        }
        function getContent(url) {
            try {
                asyncRequest = new XMLHttpRequest();

                asyncRequest.addEventListener("readystatechange", stateChange, false);
                asyncRequest.open("GET", url, true);
                asyncRequest.send(null);
            }
            catch (exception) {

                alert("request failed.");
            }
        }
        function stateChange() {
            document.getElementById("contentArea").innerHTML = asyncRequest.responseText;
        }
        function clearContent() {
            document.getElementById("contentArea").innerHTML = "";
        }
        window.addEventListener("load", registerListeners, false);
    </script>
</head>
<body>
<a href="index.php" id="logo"> </a>

<h1>Welcome to Richard Teabag's House of Cocks: Family-Style Restaurant</h1>

<h2>Meatballs for your mouth since 1995</h2>
<iframe src="navi.php" target="_parent"></iframe>
<h1>Recipes</h1>

<h2>Mouse over pictures to see recipes</h2>
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
    <legend>Recipe</legend>
    <div class="box" id="contentArea"></div>

</fieldset>
<br>
</body>
<footer>
    <iframe src="navi.php" target="_parent"></iframe>
    <p class="copy">&copy; copywrite</p>
</footer>
</html>
