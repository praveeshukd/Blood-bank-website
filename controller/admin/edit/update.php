<?php
use core\App;
use core\Database;
use core\Validator;



$db = App::resolve(Database::class);

$errors = [];

// validation

if (!Validator::string($_POST['username'], 3, 15)) {
    $errors['username'] = 'Username is required and should be between 3 and 10 characters';
}

if (!Validator::string($_POST['state'], 2, 25)) {
    $errors['state'] = 'State is required and should be more than 2 characters';
}

if (!Validator::string($_POST['district'], 3, 30)) {
    $errors['district'] = 'District is required and should be more than 3 characters';
}

if (!Validator::string($_POST['hospital'], 3, 45)) {
    $errors['hospital'] = 'Hospital name is required and should be more than 3 characters';
}

if (!Validator::string($_POST['contact'], 9, 11)) {
    $errors['contact'] = 'Please enter a valid phone number';
}


if (!Validator::string($_POST['blood'], 1, 5)) {
    $errors['blood'] = 'Please enter a valid blood group';
}
if (!Validator::string($_POST['age'], 1, 5)) {
    $errors['age'] = 'Please enter a valid blood group';
}
if (!Validator::string($_POST['verify'], 1, 10)) {
    $errors['verify'] = 'Please enter a valid blood group';
}

if (count($errors)) {
    return view('/admin/edit/edit.view.php', [
        'errors' => $errors,
    ]);
}
// check old user
$olduser = $db->query('select * from donor where username = :username', [
    'username' => $_POST['username']
])->get();

if ($olduser) {
    $errors['user'] = "User already exists";

    return view('/admin/edit/edit.view.php', [

        'errors' => $errors,
    ]);
}
// update 
$Updateuser = $db->query(
    "UPDATE donor SET username = :username,contact = :contact,Date=:Date,age=:age ,state = :state, district = :district, hospital = :hospital, blood = :blood, verify = :verify WHERE donor.id = :id"
    ,
    [
        'id' => $_POST['id'],
        'Date' => $_POST['Date'],
        'age' => $_POST['age'],
        'username' => $_POST['username'],
        'state' => $_POST['state'],
        'district' => $_POST['district'],
        'contact' => $_POST['contact'],
        'hospital' => $_POST['hospital'],
        'blood' => $_POST['blood'],
        'verify' => $_POST['verify']
    ]
);

header('location: /admin/donor');