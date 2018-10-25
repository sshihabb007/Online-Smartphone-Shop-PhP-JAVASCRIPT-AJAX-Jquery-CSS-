function show_pending()
{
    var xml=new XMLHttpRequest();
    xml.onreadystatechange =function()
    {
        if(xml.readyState==4&&xml.status==200)
        {
            document.getElementById('otable').innerHTML=xml.responseText;
        }
    }
    var url="Server?page=fullorder&state=pending";
    xml.open("GET",url,true);
    xml.send();
}
function show_delevered() {
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            document.getElementById('otable').innerHTML = xml.responseText;
        }
    }
    var url = "Server?page=fullorder&state=delever";
    xml.open("GET", url, true);
    xml.send();
}
function changestutas(p) {
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            document.getElementById('otable').innerHTML = xml.responseText;
        }
    }
    var url = "Server?page=fullorder&state=pendingchange&id="+p;
    xml.open("GET", url, true);
    xml.send();
}
function change_stutas(p) {
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            document.getElementById('otable').innerHTML = xml.responseText;
        }
    }
    var url = "Server?page=fullorder&state=nopendingchange&id=" + p;
    xml.open("GET", url, true);
    xml.send();
}