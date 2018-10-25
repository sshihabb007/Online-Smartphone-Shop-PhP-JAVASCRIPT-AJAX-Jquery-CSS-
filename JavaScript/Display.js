function showHint() {
    var v = document.getElementById("idd").value;
    var v2 = document.getElementById("price").value;
    var q = document.getElementById("qt").value;
    var qtt = document.getElementById("qt").value.length;
    var user = document.getElementById('email').value.length;
    if(user!=0)
        {
            if (qtt == 0) {
                alert("Select Quantity");
                return false;
            }
            else if (q == 0) {
                alert("You have to select atleast 1 quantity for adding to cart");
                return false;
            }

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    // var m=document.getElementById("txtHint");
                    // m.innerHTML=xmlhttp.responseText;
                    alert(xmlhttp.responseText);
                }
            };
            //var url="server.php?ist=ok&un="+v+"&cg="+v2;
            var url = "PVerify.php?id=" + v + "&price=" + v2 + "&qty=" + q;
            //alert(url);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            return true;
        }
        else
        {
            alert("You Must be Login");
        }
}

function chk() {
    var flag = true;

    var x = document.view.Quantity.value.length;
    var y = document.view.Quantity.value;

    if (x == 0) {
        alert("Select Quantity");
        flag = false;
    }
    else if (y == 1 || y == 2 || y == 3 || y == 4) {
        alert("DONE");
        flag = true;
    }
    return flag;
}