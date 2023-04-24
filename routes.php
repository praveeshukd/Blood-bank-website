<?php
$router->get('/','controller/index.php');
$router->get('/contact','controller/contact.php');
$router->get('/about','controller/about.php');
$router->get('/donate','controller/donate.php');
//         login ////////////////////////////////////
$router->get('/login', 'controller/admin/login/create.php');
$router->post('/login/update','controller/admin/login/update.php');
$router->post('/sessions','controller/admin/login/destroy.php')->only('auth');

// add donor///
$router->get('/donor/add','controller/admin/donorAdd/show.php')->only('auth');
$router->post('/donor/add','controller/admin/donorAdd/add.php')->only('auth');


///////////show///////////////////////
$router->get('/admin/donor','controller/admin/donor/create.php')->only('auth');
// verify

$router->get('/admin/unverify','controller/admin/verify/unverify.php')->only('auth');

$router->get('/verify/user','controller/admin/verify/usershow.php')->only('auth');

$router->post('/admin/useradd','controller/admin/verify/useradd.php')->only('auth');


$router->get('/admin/verify','controller/admin/verify/verify/verified.php');
// ///edit
$router->get('/donor/edit','controller/admin/edit/edit.php');
$router->post('/donor/update','controller/admin/edit/update.php');

// delete /////
$router->get('/donor/alert','controller/admin/delete/alert.php');
$router->get('/donor/delete','controller/admin/delete/delete.php');


// / user ///
$router->get('/user/donate','controller/user/donate/show.php');
// $router->get('/user/alert','controller/user/donate/alert.php');
$router->post('/user/store','controller/user/donate/store.php');

// available
$router->get('/user/available','controller/user/available/show.php');

// booking
$router->get('/user/booking','controller/user/booking/show.php');
$router->post('/booking/user','controller/user/booking/booking.php');
// SEARCH
$router->get('/looking/blood','controller/user/search/show.php');
// 
$router->post('/user/search','controller/user/search/donor.php');
$router->get('/donor','controller/user/search/donorshow.php');