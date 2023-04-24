<?php
use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);
$newcount = [];
// unverified
$unverified = $db->query("select * from donor where verify=:verify", [
   'verify' => 'unverified'
])->get();

$unverified = count($unverified);
$newcount['unverified'] = $unverified;

// count
$donor = $db->query("select * from donor ")->get();


$count = count($donor);
$newcount['count'] = $count;
// verified
$donor = $db->query("select * from donor where verify=:verify AND booking=:booking", [
   'verify' => 'verified',
   'booking' => 'no'
])->get();

$verified = count($donor);
$newcount['verified'] = $verified;


$current_date = new DateTime();



view('user/available/show.view.php', [
   'donor' => $donor,
   'newcount' => $newcount
]);