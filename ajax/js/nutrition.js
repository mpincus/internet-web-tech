var asyncRequest;

function getInfo() {
    try {
        alert("stuff1");
        asyncRequest = new XMLHttpRequest();
        asyncRequest.addEventListener("readystatechange", function () {
            processResponse();
        }, false);
        asyncRequest.open("GET", "xml/nutrition.xml", true);
        asyncRequest.send(null);

    }
    catch (exception) {
        alert("request failed");

    }
    return false;
}
function processResponse() {

    // if (asyncRequest.readyState == 4 && asyncRequest.status == 200 && asyncRequest.responseXML) {
    alert("stuff1");
    var dishes = asyncRequest.responseXML.getElementsByTagName("dish");
    var dishName = document.getElementById('dish').value;
    for (var i = 0; i < dishes.length; i++) {
        var dish = dishes.item(i);
        var name = dish.getElementsByTagName('name').item(0).firstChild.nodeValue;
        if (name == dishName) {
            document.getElementById('contentArea').innerHTML = dish.getElementById('name').item(0).firstChild.nodeValue;
            document.getElementById('contentArea').innerHTML = dish.getElementById('a').item(0).firstChild.nodeValue;
            document.getElementById('contentArea').innerHTML = dish.getElementById('b').item(0).firstChild.nodeValue;
            document.getElementById('contentArea').innerHTML = dish.getElementById('c').item(0).firstChild.nodeValue;
            document.getElementById('contentArea').innerHTML = dish.getElementById('d').item(0).firstChild.nodeValue;
        }
    }
    // }
}