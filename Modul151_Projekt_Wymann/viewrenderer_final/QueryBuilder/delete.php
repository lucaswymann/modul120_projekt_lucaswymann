<?php
include 'DB.php';

$db = DB::getInstance();

$db->delete('benutzer', ['name', 'Marei']);

$db->delete('benutzer',"18");
