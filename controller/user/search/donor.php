<?php 


use core\App;
use core\Database;
use core\Validator;
$db=App::resolve(Database::class);
$errors=[];
$errors = [];



if (!Validator::string($_POST['district'], 3, 100)) {
    $errors['district'] = 'District is required and should be more than 3 characters';
}




if ( !Validator::string($_POST['blood'], 1, 5)) {
    $errors['blood'] = 'Please enter a valid blood group';
}
if (count($errors)) {
    return view('user/search/show.view.php', [
      
        'errors' => $errors,
    ]);
}
$donor = $db->query("SELECT * FROM donor WHERE district=:district AND blood=:blood AND verify=:verify AND booking=:booking", [
    'district' => $_POST['district'],
    'blood' => $_POST['blood'],
    'verify'=>$_POST['verify'],
    'booking'=>'no'
])->get();

if(!$donor){
$errors['user']="No blood stock information available";
return view("user/search/available.view.php", [
    'errors' => $errors
]);
}
view("user/search/donor.view.php", [
    'donor' => $donor
]);