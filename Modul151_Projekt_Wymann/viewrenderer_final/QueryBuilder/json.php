<?php
include 'DB.php';

$db = DB::getInstance();


echo $db->table("benutzer")->get();


echo $db->table("benutzer")->get()->first();

echo $db->table("benutzer")->get()->first()->name;
