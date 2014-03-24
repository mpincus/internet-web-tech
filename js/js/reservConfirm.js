function rc(){
	var confirmWindow = window.open("","_parent");
//window.open("reservation.html","_blank","toolbar=no, scrollbars=yes, resizable=yes, top=500, left=500, width=400, height=400");
	var year = document.forms[0]["year"].value;
	var month = document.forms[0]["months"].value;
	var day = document.forms[0]["day"].value;
	var time = document.forms[0]["time"].value;
	var ampm = document.getElementById('ampm').options[document.getElementById('ampm').selectedIndex].text;
	localStorage.setItem("month", month);
	localStorage.setItem("year", year);
	localStorage.setItem("day", day);
	localStorage.setItem("time",time);
	localStorage.setItem("ampm",ampm);
	var toString = "<h2>Your reservation has been set for:</h2><br>"+localStorage.getItem("month")+" "+localStorage.getItem("day")+" "+localStorage.getItem("year")+" at "localStorage.getItem("time")+localStorage.getItem("ampm");
	document.getElementById('rForm').innerHTML=toString;
}