<form action="/user/register" method="post" class="reggg">
    E-Mail:</label><br>
    <input type="email" size="40" maxlength="250" name="email"><br><br>
    <small><?php echo $this->errorArray['errorMessages']['email'] ?></small>
    <br>
    Dein Passwort:<br>
    <input type="password" size="40" maxlength="250" name="passwort"><br>

    Passwort wiederholen:<br>
    <input type="password" size="40" maxlength="250" name="passwort2"><br><br>

    <input type="submit" value="Abschicken">
    </div></form>
<img class="loggimg" src="/viewrenderer_final/logg.png" width="1565px">
<link href="css/styleshit.css" rel="stylesheet">
