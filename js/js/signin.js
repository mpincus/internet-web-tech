function signupMsg(){
	localStorage.setItem("username", document.getElementById('userid').value);
	alert('Welcome ' + localStorage.getItem("username"));
}
function loggedInMsg(){
	var str = '<p>Welcome Back ' + localStorage.getItem('username')+'</p>';
	document.getElementById('userMsg').innerHTML=str;
}