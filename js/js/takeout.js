
function takeOut(){
    var checked = [];
    if(checked != null){
        for(var i = 0; i<checked.length;i++)
            checked.pop(checked[i]);
//            checkedId.pop(checkedId[i]);
    }
	if(localStorage.getItem('username') != undefined){
		 //var checked = [];
		if(document.getElementById('sweatyballs').checked){
			checked.push(document.getElementById('sweatyballs'));
        }
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
      //  console.log("bldaf", checked[0].name + checked[0].id);
		for(var i = 0; i < checked.length; i++){
			localStorage.setItem(checked[i].id, checked[i].value);
            console.log(localStorage.getItem(checked[i].id) + checked[i].id);
		}
		//test();
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
		str2 += "<div class='row'><label>" + checked[i].id + "</label><input type='text' style='background-color:#000000;' disabled='disabled' value='$" + localStorage.getItem(checked[i].id) + "'/></div><br>";
	}
	for(var i=0;i<checked.length;i++){
		total += parseFloat(localStorage.getItem(checked[i].id));
	}
    console.log("total "+total);
	total += (tax + deliv);
	var combine = str + str2 + seperator + tax + deliv + seperator + total;
	document.getElementById('tForm').innerHTML=combine;
}