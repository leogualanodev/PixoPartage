<?php
require_once('./src/models/class/database.class.php');

class User extends Database {

  public int $id;
  private string $pseudo;
  private string $mail;
  private string $password;
  public string $avatar;

  public function __construct()
  {
    parent::__construct();
  }

  public function checkIfUserExist(){
    $checkIfUserExist = $this->pdo->prepare("SELECT * FROM users WHERE pseudo = :pseudo, mail = :mail");
    $checkIfUserExist->execute();
    return $checkIfExist = $checkIfUserExist->fetchAll();
  }

  public function userRegistered($user){
    $userRegistered = $this->pdo->prepare("INSERT INTO users (pseudo, mail, password) VALUES (:pseudo, :mail, :password)");
    return $userRegistered->execute($user);
  }

}

