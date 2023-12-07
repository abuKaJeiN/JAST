<?php

require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

get('/', 'views/index.php');

get('/home', 'views/index.php');

get('/product', 'views/grid.php');

any('/login', 'views/login.php');

get('/logout', 'views/logout.php');

get('/userdashboard', 'views/userDashboard.php');

get('/test', 'views/productView.php');

any('/404','views/404.php');
