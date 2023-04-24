<?php
use core\App;
use core\Database;
use core\Validator;



$db = App::resolve(Database::class);




$donor = $db->query('select * from donor where username = :username', [
    'username' => $_POST['username']
])->get();

$verification = "unverified";
if ($donor) {

// update
$Updateuser = $db->query(
    "UPDATE donor SET username = :username,contact = :contact,Date=:Date,age=:age ,state = :state,district = :district, hospital = :hospital, blood = :blood, verify = :verify,booking=:booking WHERE donor.id = :id"
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
        'verify' => $verification,
        'booking' => $_POST['booking']
    ]
);

header('location: /');
}
else{

    return header('location:/user/available');
}