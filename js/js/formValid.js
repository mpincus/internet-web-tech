function validateForm() {
    if (document.forms[0].email)
        validateEmail();
    if ((document.forms[0].months) && (document.forms[0].day))
        validateDate();

}
function validateEmail() {
    var x = document.forms[0]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
function validateDate() {
    var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
    var currentDate = new Date();
    var inputMonth = 0;
	    for (var i = 0; i < 12; i++) {
        if (document.forms[0]["months"].value == monthNames[i])
            inputMonth = i;
    }
    if (document.forms[0]["year"].value < currentDate.getFullYear()) {
        alert("this year has passed");
        return false;
    }
    else if ((document.forms[0]["year"].value == currentDate.getFullYear()) && (inputMonth < currentDate.getMonth())) {
        alert("This month has passed");
        return false;
    }
    else if ((inputMonth == currentDate.getMonth()) && (parseInt(document.forms[0]["day"].value) < currentDate.getDate())) {
        alert("This day has passed");
        return false;
    }
    else if (document.getElementById('ampm').options[document.getElementById('ampm').selectedIndex].text == "AM") {
        if ((parseInt(document.forms[0]["time"].value) <= currentDate.getHours())||(parseInt(document.forms[0]["time"].value) > 12)) {
            alert("this time has passed");
            return false;
        }
    }

    else if (document.getElementById('ampm').options[document.getElementById('ampm').selectedIndex].text == "PM") {
        if ((parseInt(document.forms[0]["time"].value) <= currentDate.getHours())||(parseInt(document.forms[0]["time"].value))) {
            alert("this time has passed");
            return false;
        }
    }
	else 
		rc();
}
function rc() {
    bak = document.getElementById('rForm').innerHTML;
    var year = document.getElementById('year').value;
    var month = document.getElementById('months').value;
    var day = document.getElementById('day').value;
    var time = document.getElementById('time').value;
    var ampm = document.getElementById('ampm').options[document.getElementById('ampm').selectedIndex].text;
    localStorage.setItem("month", month);
    localStorage.setItem("year", year);
    localStorage.setItem("day", day);
    localStorage.setItem("time", time);
    localStorage.setItem("ampm", ampm);
    var str = "<h2>Your reservation has been set for:</h2><br><p>" + localStorage.getItem("month") + " " + localStorage.getItem("day") + " " + localStorage.getItem("year") + " at " + localStorage.getItem("time") + localStorage.getItem("ampm") + "</p><input type='button' id='okb' value = 'OK' onClick='restore(bak)'/>";
    document.getElementById('rForm').innerHTML = str;

}
function restore(bak) {
    document.getElementById('rForm').innerHTML = bak;
} 
