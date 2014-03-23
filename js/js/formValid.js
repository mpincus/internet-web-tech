function validateForm(){
	if(document.forms[0].email)
		validateEmail();
	if((document.forms[0].months)  && (document.forms[0].day))
		validateDate();
}
function validateEmail()
{
	var x=document.forms[0]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		alert("Not a valid e-mail address");
		return false;
	}
}
function validateDate(){
	var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
	var currentDate = new Date();
	var inputMonth = 0;
	if(document.forms[0]["year"].value < currentDate.getFullYear()){
		alert("this year has passed");
		return false;
	}
	for(var i=0; i<12;i++){
		if(document.forms[0]["months"].value == monthNames[i])
		inputMonth = i;
	}
	if((document.forms[0]["year"].value == currentDate.getFullYear()) &&(inputMonth < currentDate.getMonth())){
		alert("This month has passed");
		return false;
	}
	if((inputMonth == currentDate.getMonth())&&(parseInt(document.forms[0]["day"].value) < currentDate.getDate())){
		alert("This day has passed");
		return false;
	}
	if(document.forms[0]["ampm"].text == "AM"){
		if(parseInt(document.forms[0]["time"].value) <= currentDate.getHours()){
			alert("this time has passed");
			return false;
		}
	}
	if(document.forms[0]["ampm"].text == "PM"){
		if(parseInt(document.forms[0]["time"].value + 12) <= currentDate.getHours()){
			alert("this time has passed");
			return false;
		}
	}
}