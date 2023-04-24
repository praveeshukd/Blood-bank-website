<?php
use core\App;
use core\Database;
use core\Validator;


$db = App::resolve(Database::class);
// validation

$errors = [];

if (!Validator::string($_POST['username'], 3, 20)) {
    $errors['username'] = 'Username is required and should be between 3 and 20 characters';
}

if (!Validator::string($_POST['state'], 2, 20)) {
    $errors['state'] = 'State is required and should be more than 2 characters';
}

if (!Validator::string($_POST['district'], 3, 30)) {
    $errors['district'] = 'District is required and should be more than 3 characters';
}

if (!Validator::string($_POST['hospital'], 3, 50)) {
    $errors['hospital'] = 'Hospital name is required and should be more than 3 characters';
}

if (!Validator::string($_POST['contact'], 9, 11)) {
    $errors['contact'] = 'Please enter a valid phone number';
}


if (!Validator::string($_POST['blood'], 1, 15)) {
    $errors['blood'] = 'Please enter a valid blood group';
}
if (!Validator::string($_POST['age'], 1, 15)) {
    $errors['age'] = 'Please enter a valid blood group';
}
if (!Validator::string($_POST['verify'], 1, 10)) {
    $errors['verify'] = 'Please enter a verification';
}
if (count($errors)) {
    return view('admin/add/show.view.php', [

        'errors' => $errors,
    ]);
}
// check old user
$olduser = $db->query('select * from donor where username = :username', [
    'username' => $_POST['username']
])->get();

if ($olduser) {
    $errors['user'] = "user found";

    return view('admin/add/show.view.php', [

        'errors' => $errors,
    ]);
} 
// count
$user = $db->query('SELECT * FROM donor')->get();

$count = count($user);
$newcount = $count + 1;
$booking = "no";
// insert admin

$user = $db->query('INSERT INTO donor(id,username,state,district,age,hospital,blood,contact,verify,booking) VALUES(:id,:username,:state,:district,:age,:hospital,:blood,:contact,:verify,:booking)', [
    'id' => $newcount,
    'username' => $_POST['username'],
    'state' => $_POST['state'],
    'district' => $_POST['district'],
    'age' => $_POST['age'],
    'hospital' => $_POST['hospital'],
    'blood' => $_POST['blood'],
    'contact' => $_POST['contact'],
    'verify' => $_POST['verify'],
    'booking' => $booking

]);

header('location:/admin/donor');