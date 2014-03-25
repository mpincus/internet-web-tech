function takeOut(){
	if(localStorage.getItem('username') != undefined){
		var checked = new Array();
		if(document.getElementById('sweatyballs').checked)
			checked.push(document.getElementById('sweatyballs'));
		if(document.getElementById('pb').checked)
			checked.push(document.getElementById('pb'));
		if(document.getElementById('cocksoup').checked)
			checked.push(document.getElementById('cocksoup'));
		if(document.getElementById('cockmeat').checked)
			checked.push(document.getElementById('cockmeat'));
		if(document.getElementById('chef').checked)
			checked.push(document.getElementById('chef'));
		if(document.getElementById('linux').checked)
			checked.push(document.getElementById('linux'));
		if(document.getElementById('fishballs').checked)
			checked.push(document.getElementById('fishballs'));
		for(var i = 0; i < checked.length; i++){
			sessionStorage.setItem(checked[i].name, checked[i]);
		}
		orderConfirm(checked);
	}
	else
		alert("please signin to order");
}
function orderConfirm(checked){
	bak = document.getElementById('tForm').innerHTML;
	var str = "<h2>This is the order you have selected.</h2><br>";
	var str2 = "" ;
	var tax = 1;
	var deliv = 900;
	var seperator = "<p>----------------------------------------------</p>";
	var total = 0;
	for(var i = 0; i < checked.length; i++){
		str2 += "<div class='row'><label>" + sessionStorage.getItem(checked[i].name).name + "</label><input type='text' style='background-color:#000000;' disabled='disabled' value='$" + sessionStorage.getItem(checked[i].name).value + "'/></div><br>";
	}
	for(var i=0;i<checked.length;i++){
		total += parseInt(sessionStorage.getItem(checked[i].name).value);
	}
	total += (tax + deliv);
	var combine = str + str2 + seperator + tax + deliv + seperator + total;
	document.getElementById('tForm').innerHTML=combine;
}