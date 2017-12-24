<?php
include 'DB.php';

$db = DB::getInstance();

//insert
$db->insert('***',
    [
        'name' => 'Marei',
        'vorname' => 'Morsy',
        'benutzername'	=> 'hallo'
    ]);

//update
$db->update('***',
    [
        'first_name' => 'Mohammed',
        'last_name' => 'Gharib',
        'age'	=> 24
    ],1);


//delete
$db->delete('*', ['name', 'Marei']);


$db->delete('*',"*");

//select
$rows = $db->table('benutzer')->get();

foreach ($rows as $row) {
    echo "$row->name ";
    echo "$row->vorname ";
    echo "$row->benutzername <br>";
}

echo $db->getSQL();