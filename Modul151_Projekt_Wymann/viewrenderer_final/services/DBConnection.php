<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 26.10.2017
 * Time: 11:32
 */

namespace services;


class DBConnection
{

    public static $dbConnection;

    public static function getDbConnection(){
        if(DBConnection::$dbConnection){
            return DBConnection::$dbConnection;
        }else{
            DBConnection::createConnection();
            return DBConnection::$dbConnection;
        }
    }

    private static function createConnection(){
        DBConnection::$dbConnection = new \PDO('mysql:host=localhost;dbname=modul151', 'root', '');
    }

}
/*require_once('DBConnection.php');
$sql= "SELECT filmName, filmDescription FROM movies WHERE filmID = 10";
$stmt = $pdo->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo $row['benutzername'];*/
