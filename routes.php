<?php

require_once __DIR__.'/router.php';

// Static GET
get('/', 'views/Home.php');
get('/about', 'views/About.php');
get('/contact', 'views/Contact.php');

// Dynamic GET
get('/user/$name', 'views/User.php');

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/404.php');
