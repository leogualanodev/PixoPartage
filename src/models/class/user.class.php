<?php
require_once('./src/models/class/database.class.php');

class User extends Database {

  private int $id;
  private string $pseudo;
  private string $mail;
  private string $password;
  public string $avatar;

  public function __construct()
  {
    parent::__construct();
  }

  public function getIdOfUser(){

  }

  public function userRegistered($user){
    $userRegistered = $this->pdo->prepare("INSERT INTO users (pseudo, mail, password) VALUES (:pseudo, :mail, :password)");
    return $userRegistered->execute($user);
  }




}