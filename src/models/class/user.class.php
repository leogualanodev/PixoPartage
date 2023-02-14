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

  public function userRegistered(){
    $userRegistered = $this->pdo->prepare("INSERT INTO users VALUES (:pseudo, :mail, :password)");
    $userRegistered->bindParam('pseudo', $pseudo);
    $userRegistered->bindParam('mail', $mail);
    $userRegistered->bindParam('password', $password);
    $userRegistered->execute();
  }

  


}