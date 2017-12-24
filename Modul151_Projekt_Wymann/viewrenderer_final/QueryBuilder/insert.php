<?php
include 'DB.php';

$db = DB::getInstance();



$db->insert('benutzer',
    [
        'name' => 'Marei',
        'vorname' => 'Morsy',
        'benutzername'	=> 'hallo'
    ]);