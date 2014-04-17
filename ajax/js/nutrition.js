var asyncRequest;

function getInfo() {
    try {
        asyncRequest = new XMLHttpRequest();
        asyncRequest.open("GET", "nutrition.xml", false);
        asyncRequest.send();

        var dishes = asyncRequest.responseXML.getElementsByTagName("dish");
        var dishName = document.getElementById('dish').value;
        for (var i = 0; i < dishes.length; i++) {
            var name = dishes[i].getElementsByTagName('name')[0].firstChild.nodeValue;
            if (name == dishName) {
                document.getElementById('name').innerHTML = "<p>"+ dishes[i].getElementsByTagName('name')[0].firstChild.nodeValue + "</p>";
                document.getElementById('a').innerHTML =  "<p>"+ dishes[i].getElementsByTagName('a')[0].firstChild.nodeValue + "</p>";
                document.getElementById('b').innerHTML =  "<p>"+ dishes[i].getElementsByTagName('b')[0].firstChild.nodeValue + "</p>";
                document.getElementById('c').innerHTML = "<p>"+ dishes[i].getElementsByTagName('c')[0].firstChild.nodeValue + "</p>";
                document.getElementById('d').innerHTML = "<p>"+ dishes[i].getElementsByTagName('d')[0].firstChild.nodeValue + "</p>";
            }
        }
    }
    catch (exception) {
        alert(exception);
    }

    return false;
}
