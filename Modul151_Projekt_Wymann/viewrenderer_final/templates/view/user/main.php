

<div class="mainnn"><form action="/user/main" method="post" >
    <link href="css/stylesheet.css" rel="stylesheet">
    <br><br>
    <div class="tables"><table style="width:100%">
            <?php
            $cookie_name = "View";
            $cookie_value = "already seen";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            ?>
            <html>
            <body>
<style>
    div.cookiee{
        border: groove;
        background-color: #7a8eb9;
        width: 200px;
    }
</style>
<div class="cookiee">            <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo "New for you? '" . $cookie_name . "' first look at the newest questions asked";
            } else {
                echo "View '" . $cookie_name . "' nothing new<br>";
                echo "State is: " . $_COOKIE[$cookie_name];
            }
            ?></div>
        <caption>Newest Questions</caption>
        <tr>
            <th>Questions</th>
            <th>Answers</th>
        </tr>
        <tr>
            <td>how to make minimal?</td>
            <td>ADdafs adfsdfasd hsfgh f dgh</td>

        </tr>
        <tr>
            <td>how to make psytrance?</td>
            <td>ADdafs adfsdfasd sdfhgh h fh ghdfgh </td>

        </tr>
        <tr>
            <td>how to make progressive trance?</td>
            <td>ADdafs adfsdfasd  ghdfh er gdf</td>

        </tr>
        <tr>
            <td>how to make techno?</td>
            <td>ADdafs adfsdfasdasdfsad asdfasd</td>

        </tr>
    </table>
    <button><a href="news"> go to Newest Questions</a></button>
    <br><br></div>
<style> strong.over, h2.disctxt{
        font-family: "Century Gothic";
    }</style>
    <div class="overview"><strong class="over">Today's Topic</strong>
        <div class="discussion" align="center">
            <h2 class="disctxt">Discussion - Which plugins do you use?</h2>

            <div id="wrapper">
                <div id="menu">
                    <p class="welcome">Welcome to todays discussion: <b></b></p>
                    <p class="enter"><a class="entr" id="exit" href="/viewrenderer_final/chat/chatindex.php">Enter Chat</a></p>


                </div>



                </div></div>

</form>