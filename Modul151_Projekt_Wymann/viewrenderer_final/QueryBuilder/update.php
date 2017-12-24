<?php
include 'DB.php';

$db = DB::getInstance();

$db->update('benutzer',
    [
        'vorname' => 'John',
        'name' => 'Doe',
        'benutzername'	=> 'möhu'
    ],20);
