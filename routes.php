<?php

require_once __DIR__.'/router.php';

get('/', 'views/index.php');

get('/home', 'views/index.php');

get('/shop', 'views/grid.php');

any('/login', 'views/login.php');

get('/logout', 'views/logout.php');

get('/userdashboard', 'views/userDashboard.php');

get('/product/$id', 'views/productView.php');

get('/product/$prodname/$id', 'views/productView.php');

any('/fp','views/fileUploader.php'); //dev

any('/fp1','views/upload.php'); //dev

any('/404','views/404.php');

//can callback be used as auth? should it be?

