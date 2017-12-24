<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/stylesheet.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body class="prof">
<br><br><div class="profmain">
    <strong>Your Profile</strong>
    <form method="post" >
        <div class="userdata"> <br><br><button class="jsonbtn" name = "sent">infos anzeigen</button>
            <button name="jsonbtn" class="jsonbtn">als JSON anzeigen</button><br><br><br>
    </form></div> <div class="json"><?php
    if(isset($_POST['sent'])){
        $pdo = new PDO('mysql:host=localhost;dbname=modul151', 'root', '');
        $sql = "SELECT * FROM benutzer";
        foreach ($pdo->query($sql) as $row) {
            echo $row['name']." <br />";
            echo $row['vorname']."<br />";
            echo $row['benutzername']."<br /><br />";
        }}

    if(isset($_POST['jsonbtn'])){

        /*$myObj->name = "Wymann";
        $myObj->vorname = "Lucas";
        $myObj->benutzername = "lucaswy";
        $myJSON = json_encode($myObj);
        echo $myJSON;*/

        $myArr = array("Name: Wymann", "Firstname: Lucas", "Username: lucaswy");

        $myJSON = json_encode($myArr);
        echo $myJSON;
    }?></div>
<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
    <!-- Edit Personal Info -->
    <div class="personal-info">
        <h3 class="widget-header user">Persönliche Informationen ändern</h3>
        <form action="#">
            <!-- First Name -->
            <div class="form-group">
                <label for="first-name">Vorname</label>
                <input type="text" class="form-control" id="first-name"  >
            </div>
            <!-- Last Name -->
            <div class="form-group">
                <label for="last-name">Nachname</label>
                <input name="mailll" type="text" class="form-control" id="last-name" >
            </div>
            <!-- File chooser -->
            <form action="upload.php" method="post" enctype="multipart/form-data"><div class="form-group choose-file">
                    <label>Profilbild auswählen</label>

                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Bild hochladen" name="submit">
                </div></form>
            <!-- Comunity Name -->

            <!-- Checkbox -->
            <!-- Zip Code -->
            <div class="form-group">
                <label for="plz">PLZ</label>
                <input type="text" class="form-control" id="zip-code">
            </div>
            <!-- Submit button -->
            <button name="aendernbtn" class="btn btn-transparent" formaction="aendern">Änderungen speichern</button>

        </form>
    </div>
    <div class="change-password">
        <h3 class="widget-header user">Passwort ändern</h3>
        <form action="#">
            <!-- Current Password -->
            <div class="form-group">
                <label for="current-password">Aktuelles Passwort</label>
                <input type="password" class="form-control" id="current-password">
            </div>
            <!-- New Password -->
            <div class="form-group">
                <label for="new-password">Neues Passwort</label>
                <input type="password" class="form-control" id="new-password">
            </div>
            <!-- Confirm New Password -->
            <div class="form-group">
                <label for="confirm-password">Passwort bestätigen</label>
                <input name="neues" type="password" class="form-control" id="confirm-password">
            </div>
            <!-- Submit Button -->
            <button name="changer" class="btn btn-transparent">Passwort ändern</button>
        </form>
        <div class="bilder"><img src="/viewrenderer_final/dj.png" align="left">            <img src="/viewrenderer_final/dj.png" align="right"></div>
    </div></div>
</body>
</html>

