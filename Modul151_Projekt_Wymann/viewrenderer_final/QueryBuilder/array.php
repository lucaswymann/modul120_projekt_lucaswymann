<?php
include 'DB.php';

$db = DB::getInstance();

$users = $db->table("benutzer")->get()->toJSON();
echo $users;