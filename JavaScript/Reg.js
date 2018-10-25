function chkEmail() {
    var i = document.Pro.Email.value.length;
    var j = document.Pro.Email.value;
    if (i == 0) {
        document.Pro.Email.style = "background-color: #ff6666";
        document.getElementById("ema").innerHTML = "(invalid)";
        document.getElementById("ema").style = "visibility: visible"
        return false;
    }
    else {
        var indx = j.indexOf("@");
        if (indx > 1) {
            if (j.indexOf(".", indx) > 1) {
                
                            document.Pro.Email.style = "background-color: white";
                            document.getElementById("ema").style = "visibility: hidden";
                            return true;
            }
            else {
                document.Pro.Email.style = "background-color: #ff6666";
                document.getElementById("ema").innerHTML = "(invalid)";
                document.getElementById("ema").style = "visibility: visible"
                return false;
            }
        }
        else {
            document.Pro.Email.style = "background-color: #ff6666";
            document.getElementById("ema").innerHTML = "(invalid)";
            document.getElementById("ema").style = "visibility: visible"
            return false;
        }
    }
}

function fastname() {
    var i = document.Pro.fname.value.length;
    if (i >= 2 && i <= 8) {
        document.getElementById("fna").style = "visibility: hidden";
        document.Pro.fname.style = "background-color: white";
        return true;
    }
    else {
        document.getElementById("fna").style = "visibility: visible";
        document.Pro.fname.style = "background-color: #ff6666";
        return false;
    }
}
function lastname() {
    var i = document.Pro.lname.value.length;
    if (i >= 2 && i <= 8) {
        document.getElementById("lna").style = "visibility: hidden";
        document.Pro.lname.style = "background-color: white";
        return true;
    }
    else {
        document.getElementById("lna").style = "visibility: visible";
        document.Pro.lname.style = "background-color: #ff6666";
        return false;
    }
}
function g() {
    var i = document.Pro.Gender.value.length;
    if (i != 0) {
        document.getElementById("gen").style = "visibility: hidden";
        return true;
    }
    else {
        document.getElementById("gen").style = "visibility: visible";
        return false;
    }
}
function pass() {
    var i = document.Pro.Password.value.length;
    if (i >= 8 && i <= 15) {
        document.getElementById("cps").style = "visibility: hidden";
        document.Pro.Password.style = "background-color: white";
        return true;
    }
    else {
        document.getElementById("cps").style = "visibility: visible";
        document.Pro.Password.style = "background-color: #ff6666";
        return false;
    }
}
function cpass() {
    var i = document.Pro.CPassword.value.length;
    if (i == 0 || (i >= 8 && i <= 15)) {
        if (document.Pro.Password.value == document.Pro.CPassword.value) {
            document.getElementById("cnps").style = "visibility: hidden";
            document.Pro.CPassword.style = "background-color: white";
            return true;
        }
        else {
            document.getElementById("cnps").innerHTML = "Not Matched";
            document.getElementById("cnps").style = "visibility: visible";
            document.Pro.CPassword.style = "background-color: #ff6666";
            return false;
        }
    }
    else {
        document.getElementById("cnps").innerHTML = "(range 8-15)";
        document.getElementById("cnps").style = "visibility: visible";
        document.Pro.CPassword.style = "background-color: #ff6666";
        return false;
    }
}
function phne() {
    var i = document.Pro.phone.value.length;
    var p = document.Pro.phone.value;
    var num = Math.sign(p)
    if (i == 11) {
        if (Number.isInteger(parseInt(p)) && (parseInt(p).toString().length == 10 || parseInt(p).toString().length == 11)) {
            if (num == 1) {
                document.getElementById("pn").style = "visibility: hidden";
                document.Pro.phone.style = "background-color: white";
                return true;
            }
            else {
                document.getElementById("pn").innerHTML = "(invalid)";
                document.getElementById("pn").style = "visibility: visible";
                document.Pro.phone.style = "background-color: #ff6666";
                return false;
            }
        }
        else {

            document.getElementById("pn").innerHTML = "(invalid)";
            document.getElementById("pn").style = "visibility: visible";
            document.Pro.phone.style = "background-color: #ff6666";
            return false;
        }
    }
    else {
        document.getElementById("pn").style = "(range:11-11)";
        document.getElementById("pn").style = "visibility: visible";
        document.Pro.phone.style = "background-color: #ff6666";
        return false;
    }
}
function datecheck() {
    var date = document.getElementById('db').value.length;
    if (date>0) {
        document.getElementById("dob").style = "visibility: hidden";
        document.getElementById('db').style = "background-color: white";
        return true;
    }
    else
    {
        document.getElementById("dob").style = "visibility: visible";
        document.getElementById('db').style = "background-color: #ff6666";
        return false;
    }
}
function update() {
    if (!fastname()) {
        document.Pro.fname.focus();
        return false;
    }
    else if (!lastname()) {
        document.Pro.lname.focus();
        return false;
    }
    else if (!chkEmail()) {
        document.Pro.Email.focus();
        return false;
    }
    else if (!g()) {
        return false;
    }
    else if (!datecheck()) {
        return false;
    }
    else if (!pass()) {
        document.Pro.Password.focus();
        return false;
    }

    else if (!cpass()) {
        document.Pro.CPassword.focus();
        return false;
    }
    else if (!phne()) {
        document.Pro.phone.focus();
        return false;
    }
    else {
        return true;
    }
}
function eroad() {
    alert('Some thing is missing');
}
function dberror() {
        alert('Can not Register Check server connection');
}
function notavailable() {
        alert('This Email Already Used');
}
function notverified(params) {
        alert('Please Full fill The Requirment');
}
