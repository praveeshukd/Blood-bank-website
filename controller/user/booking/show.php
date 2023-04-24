<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);
// find
$user = $db->query('select * from donor where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


view('user/booking/show.view.php', [
    'user' => $user
]);