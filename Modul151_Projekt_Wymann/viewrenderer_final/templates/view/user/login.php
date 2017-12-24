<link href="css/stylesheet.css" rel="stylesheet">

<head>

    <title>Login</title>
</head>
<body>

<?php
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<form action="?login=1" method="post" class="reggg" >
    E-Mail:<br>
    <input placeholder="Email eingeben" type="email" size="40" maxlength="250" name="email">
    <br><br>
    Dein Passwort:<br>
    <input placeholder="Passwort eingeben" type="password" size="40"  maxlength="250" name="passwort">
    <br><br>
    <input type="submit" value="Einloggen"><br>
    <img src="/viewrenderer_final/logg.png" width="1545px">
</form>