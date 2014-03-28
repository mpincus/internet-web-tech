function takeOut() {
    var checked = [];
    if (checked != null) {
        for (var i = 0; i < checked.length; i++)
            checked.pop();
    }
    if (localStorage.getItem('username') != undefined) {
        //var checked = [];
        if (document.getElementById('sweatyballs').checked) {
            checked.push(document.getElementById('sweatyballs'));
        }
        if (document.getElementById('pb').checked)
            checked.push(document.getElementById('pb'));
        if (document.getElementById('cocksoup').checked)
            checked.push(document.getElementById('cocksoup'));
        if (document.getElementById('cockmeat').checked)
            checked.push(document.getElementById('cockmeat'));
        if (document.getElementById('chef').checked)
            checked.push(document.getElementById('chef'));
        if (document.getElementById('linux').checked)
            checked.push(document.getElementById('linux'));
        if (document.getElementById('fishballs').checked)
            checked.push(document.getElementById('fishballs'));
        //  console.log("bldaf", checked[0].name + checked[0].id);
        for (var i = 0; i < checked.length; i++) {
            localStorage.setItem(checked[i].id, checked[i].value);
            console.log(localStorage.getItem(checked[i].id) + checked[i].id);
        }
        //test();
        orderConfirm(checked);
    }
    else
        alert("please signin to order");
}
function orderConfirm(checked) {
    bak = document.getElementById('tForm').innerHTML;
    var str = "<h2>This is the order you have selected.</h2><br>";
    var str2 = "";
    var str3 = "";
    var str4 = "";
    var tax = 1.00;
    var deliv = 900.00;
    var total = 0;
    str4 = "<div class='row'><label>Name</label><input type='text'  disabled='disabled' style='background-color:#000000;' value='" + document.getElementById('name').value + "'/></div><br>" + "<div class='row'><label>Telephone Number</label><input type='text'  disabled='disabled' style='background-color:#000000;' value='" + document.getElementById('tel').value + "'/></div><br>" + "<div class='row'><label>Address</label><input type='text'  disabled='disabled' style='background-color:#000000;' value='" + document.getElementById('address').value + "'/></div><br>" + "<div class='row'><label>Town</label><input type='text'  disabled='disabled' style='background-color:#000000;' value='" + document.getElementById("town").value + "'/></div><br>";
    for (var i = 0; i < checked.length; i++) {
        str2 += "<div class='row'><label>" + checked[i].id + "</label><input type='text' style='background-color:#000000;' disabled='disabled' value='$" + localStorage.getItem(checked[i].id) + "'/></div><br>";
    }
    for (var i = 0; i < checked.length; i++) {
        total += parseFloat(localStorage.getItem(checked[i].id));
    }
    total += (tax + deliv);
    str3 = "<div class='row'><label>Tax</label><input type='text'  disabled='disabled' style='background-color:#000000;' value='$" + tax + "'/></div><br>" + "<div class='row'><label>Delivary</label><input type='text'  disabled='disabled' style='background-color:#000000;' value='$" + deliv + "'/></div><br>" + "<div class='row'><label>Total</label><input type='text'  disabled='disabled' style='background-color:#000000;' value='$" + total + "'/></div><br>";

    var combine = str + str2 + "<hr><br>" + str3 + "<hr><br>" + str4;
    document.getElementById('tForm').innerHTML = combine;
}