<?php

use core\App;
use core\Database;
use core\Validator;


$db=App::resolve(Database::class);
$errors = [];
// update verification


$Updateuser = $db->query("UPDATE donor SET verify = :verify WHERE id = :id",[
    'id' => $_POST['id'],
    'verify' => $_POST['verify']
]);
$donor=$db->query('select * from donor where id=:id',[
    'id'=>$_POST['id']
])->get();


    $errors['user']="verified";

view('admin/verify/result.php',[
    'errors'=>$errors,
    'donor'=>$donor
]);