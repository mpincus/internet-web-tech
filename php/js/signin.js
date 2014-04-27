function signupMsg() {
    //passCheck();
    //if (passCheck()) {
    localStorage.setItem("username", document.getElementById('userid').value);
    alert('Welcome ' + localStorage.getItem("username"));
    //}
}
function loggedInMsg() {
    if (localStorage.getItem('userid') != undefined) {
        var str = '<p>Welcome Back ' + localStorage.getItem('username') + '</p>';
        document.getElementById('userMsg').innerHTML = str;
    }
}
function passCheck() {
    if (docuent.getElementById('cpswrd') != undefined) {
        if (docuement.getElementById('pswrd').value == document.getElementById('cpswrd').value) {
            return true;
        }
        else
            return false;
    }
    else
        return true;
}