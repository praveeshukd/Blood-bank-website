<?php 
use core\App;
use core\Database;
use core\Validator;
$db=App::resolve(Database::class);
// find
 $donor= $db->query("select * from donor where id=:id",[
    'id'=>$_GET['id']
 ])->get();



view('admin/verify/user.view.php',[
    'donor'=>$donor
]);