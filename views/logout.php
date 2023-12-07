<?php

session_start();
session_unset(); 
session_destroy();

$url = '/home';

echo '<script language="javascript">';
echo 'window.location.replace("'.$url.'");';
echo '</script>';