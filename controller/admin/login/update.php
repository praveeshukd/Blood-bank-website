<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);


$username = $_POST['username'];
$password = $_POST['password'];
$errors = [];
// validation
if (!Validator::string($_POST['password'], 2, 100)) {
    $errors['password'] = 'more than 5 characters is required.';
}
if (!empty($errors)) {
    return view('admin/login/show.view.php', [
        'errors' => $errors
    ]);
}
// find admin
$user = $db->query('select * from admin where username=:username AND password=:password', [
    'username' => $username,
    'password' => $password
])->find();
// session
if ($user) {

    login([
        'username' => $username
    ]);
    header('location:/admin/donor');
    exit();

}

$errors['user'] = "user not found";
return view('admin/login/show.view.php', [
    'errors' => $errors
]);