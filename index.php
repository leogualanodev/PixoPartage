<?php


require_once __DIR__ . './src/includes/header.php';
// require_once __DIR__ . './src/views/register.php';
require_once __DIR__ . './src/views/login.php';

if (!empty($_GET) && isset($_GET)) {

  if (!empty($_GET['action'] == 'register')) {
    require_once __DIR__ . './src/views/register.php';
    echo $content;

    if(!empty($_POST)){
      var_dump($_POST);
    }
  }


}
