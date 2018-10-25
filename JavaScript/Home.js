function Src() {
    var scl = document.getElementById('sc').value.length;
    var searc = document.getElementById('sc');
    if(scl==0)
    {
        searc.style = "background-color: #ff6666";
        return false;
    }
    else if (scl>0) {
        searc.style="background-color: white";
        return true;
    }
}
function Valied() {
    if(!Src())
    {
        document.getElementById('sc').focus();
        return false;
    }
    else
    {
        return true;
    }
}