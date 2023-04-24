<?php

use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

$newcount = [];
// unverified

$donor = $db->query("select * from donor ")->get();


$count = count($donor);
$newcount['count'] = $count;
// verified
$verify = $db->query("select * from donor where verify=:verify", [
   'verify' => 'verified'
])->get();
// count
$verified = count($verify);
$newcount['verified'] = $verified;
// unverified
$donor = $db->query("select * from donor where verify=:verify", [
   'verify' => 'unverified'
])->get();

$unverified = count($donor);
$newcount['unverified'] = $unverified;


view('admin/verify/show.view.php', [
   'donor' => $donor,
   'newcount' => $newcount
]);