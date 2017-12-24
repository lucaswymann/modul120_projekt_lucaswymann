<?
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass)
or die ('Error connecting to mysql');

$dbname = 'mysimplechat';

mysqli_select_db($dbname);

$message = $_POST['message'];

if($message != "")
{
    $sql = "INSERT INTO `chat` VALUES('','$message')";
    mysqli_query($sql);
}

$sql = "SELECT `Text` FROM `chat` ORDER BY `Id` DESC";
$result = mysqli_query($sql);

while($row = mysqli_fetch_array($result))
    echo $row['Text']."\n";


?>

