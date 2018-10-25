function Remove(p) {
    var xml= new XMLHttpRequest();
    xml.onreadystatechange =function() {
        if(xml.readyState==4 && xml.status==200)
        {
            document.getElementById('ctable').innerHTML=xml.responseText;
            if (xml.responseText =="<h2>No items were found.<h2>")
            {
                document.getElementById('ct').disabled = true;
            }
        }
    }
    var url="Server.php?page=cart&id="+p;
    xml.open("GET",url,true);
    xml.send();
}