<?php 


use core\App;
use core\Database;
use core\Validator;
$db=App::resolve(Database::class);
$newcount=[];
// unverified
$unverified= $db->query("select * from donor where verify=:verify",[
    'verify'=>'unverified'
 ])->get();

$unverified=count($unverified);
$newcount['unverified']=$unverified;
// verified

$verified= $db->query("select * from donor where verify=:verify",[
    'verify'=>'verified'
 ])->get();
$verified=count($verified);
$newcount['newverified']=$verified;

 $donor= $db->query("select * from donor ")->get();


 $count = count($donor);
 $newcount['count']=$count;
    
 view("admin/donor/show.view.php", [
   
    'donor' => $donor,
    'newcount'=>$newcount
]);