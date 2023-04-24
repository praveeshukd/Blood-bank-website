<?php 
use core\App;
use core\Database;
use core\Validator;

// dd($_POST['state']);
$db=App::resolve(Database::class);

// validation
$errors = [];

if (!Validator::string($_POST['username'], 1, 100)) {
    $errors['username'] = 'Username is required and should be between 3 and 100 characters';
}

if (!Validator::string($_POST['state'], 1, 100)) {
    $errors['state'] = 'State is required and should be more than 2 characters';
}

if (!Validator::string($_POST['district'], 1, 100)) {
    $errors['district'] = 'District is required and should be more than 5 characters';
}

if (!Validator::string($_POST['hospital'],2, 100)) {
    $errors['hospital'] = 'Hospital name is required and should be more than 5 characters';
}
if (!Validator::string($_POST['age'],2, 100)) {
    $errors['age'] = 'Hospital name is required and should be more than 5 characters';
}


if (!Validator::string($_POST['contact'],9,13)) {
    $errors['contact'] = 'Please enter a valid phone number';
}


if (!Validator::string($_POST['blood'],1, 5)) {
    $errors['blood'] = 'Please enter a valid blood group';
}
if (count($errors)) {
    return view('user/donate/show.view.php', [
      
        'errors' => $errors,
    ]);
}
// total count
$users= $db->query('SELECT * FROM donor')->get();

$count = count($users);
$newcount=$count+1;
$booking='no';


    $user= $db->query('INSERT INTO donor(id,username,state,district,age,hospital,blood,contact,verify,booking) VALUES(:id,:username,:state,:district,:age,:hospital,:blood,:contact,:verify,:booking)', [
         'id'=>$newcount,
        'username' => $_POST['username'],
        'state' => $_POST['state'],
        'district' => $_POST['district'],
        'age' => $_POST['age'],
        'hospital' => $_POST['hospital'],
        'blood' => $_POST['blood'],
        'contact' => $_POST['contact'],
        'verify' => $_POST['verify'],
        'booking'=>$booking
        
    ]);


    header('location:/');

    




   

  