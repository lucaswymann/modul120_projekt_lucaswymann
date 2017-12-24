<style> div.loginfos{
        background-color: #00aced;
        border: groove;
    }</style><div class="loginfos"><?php
$pdo = new PDO('mysql:host=localhost;dbname=modul151', 'root', '');
    $sql = "SELECT * FROM benutzer";
    foreach ($pdo->query($sql) as $row) {
    echo "Name:" . $row['name']." <br />";
    echo "Firstname:" . $row['vorname']."<br />";
    echo "Username:" . $row['benutzername']."<br /><br />";
    }?>
    </div>
<div class="loginfos"><button><a href="register">go to registration</button><button><a href="login">go to login</button></div>


