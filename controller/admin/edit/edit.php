<?php

use core\App;
use core\Database;

$db=App::resolve(Database::class);
// find
$errors=[];
    $user = $db->query('select * from donor where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();


view("admin/edit/edit.view.php", [
   
    'user'=>$user
]);