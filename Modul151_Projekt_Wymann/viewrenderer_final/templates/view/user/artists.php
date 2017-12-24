<html>
<p class="explain">Here's a list of producers you absolutely have to know. If not, listen to the suggested tracks;)</p>
<style>div {
        background-color: #00aced;
    }

    p.explain {
        border: groove;
    }</style>
<body>
<img src="/viewrenderer_final/dj.png" align="right">

<div id='showCD'></div>
<br>
<input type="button" onclick="previous()" value="<<">
<input type="button" onclick="next()" value=">>">
<script>
    var i = 0;
    displayArtist(i);

    function displayArtist(i) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                myFunction(this, i);
            }
        };
        xmlhttp.open("GET", "/viewrenderer_final/musicans.xml", true);
        xmlhttp.send();
    }

    function myFunction(xml, i) {
        var xmlDoc = xml.responseXML;
        x = xmlDoc.getElementsByTagName("CD");
        document.getElementById("showCD").innerHTML =
            "Artist: " +
            x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
            "<br>Title: " +
            x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
            "<br>Year: " +
            x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue +
            "<br>Country: " +
            x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
            "<br>Label: " +
            x[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue +
            "<br>Listen to: " +
            x[i].getElementsByTagName("LINK")[0].childNodes[0].nodeValue + "<br><button><a href='https://soundcloud.com/" + x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue + "'>go to</a></button>";
    }

    function next() {
        if (i < x.length - 1) {
            i++;
            displayArtist(i);
        }
    }

    function previous() {
        if (i > 0) {
            i--;
            displayArtist(i);
        }
    }
</script>
<br><br><br><br><br>

</body>
</html>