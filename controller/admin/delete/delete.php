<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
// find

  $user = $db->query('select * from donor where id = :id', [
    'id' => $_GET['id']
  ])->findOrFail();
// delete
  $db->query('delete from donor where id=:id', [
    'id' => $_GET['id']
  ]);
// reset id
  $db->query('SET @id = 0');
  $db->query('UPDATE donor SET id = (@id:=@id+1)');

  header('location: /admin/donor');
  exit();
}