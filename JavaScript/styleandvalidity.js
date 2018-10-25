function countsrc(fnd) {
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function()
    {
        if(xml.readyState==4 && xml.status==200)
        {
            var m=xml.responseText;
            if (m>=4) {
                document.getElementById("srctable").style= 'width:100%';
            }
            else if(m==3)
            {
                document.getElementById("srctable").style = 'width:75%';
            }
            else if (m == 2) {
                document.getElementById("srctable").style = 'width:50%';
            }
            else if (m == 1) {
                document.getElementById("srctable").style = 'width:25%';
            }
        }
    }
    var url = "server.php?page=src&find=" + fnd;
    xml.open("GET",url,true);
    xml.send();
}
function countmodel(id) {
    var xml1 = new XMLHttpRequest();
    xml1.onreadystatechange = function () {
        if (xml1.readyState == 4 && xml1.status == 200) {
            var n = xml1.responseText;
            if (n==4) {
                document.getElementById("modeltable").style = 'width:100%';
            }
            else if (n==3) {
                document.getElementById("modeltable").style = 'width:75%';
            }
            else if (n == 2) {
                document.getElementById("modeltable").style = 'width:50%';
            }
            else if (n == 1) {
                document.getElementById("modeltable").style = 'width:25%';
            }
        }
    }
    var url = "server.php?page=model&id=" + id;
    xml1.open("GET", url, true);
    xml1.send();
}