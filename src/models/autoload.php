<?php

spl_autoload_register(function ($class) {
  require_once './src/models/class/' . $class . '.class.php';
});

$picture = new Picture();
$video = new Video();
$comment = new Comment();
