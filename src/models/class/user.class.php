<?php
require_once('./src/models/class/database.class.php');

class User extends Database
{

  public int $id;
  private string $pseudo;
  private string $mail;
  private string $password;
  public string $avatar;

  public function __construct()
  {
    parent::__construct();
  }

  public function checkIfUserExist($pseudo, $mail)
  {
    $checkIfUserExist = $this->pdo->prepare("SELECT pseudo, mail FROM users ");
    $checkIfUserExist->execute();
    $checkIfExist = $checkIfUserExist->fetchAll();
    $result = false;
    for ($i=0; $i < count($checkIfExist); $i++) { 
      if($pseudo == $checkIfExist[$i]['pseudo'] || 
      $pseudo == $checkIfExist[$i]['mail']){
        $result = true;
      }
    }
      for ($i=0; $i < count($checkIfExist); $i++) { 
        if($mail == $checkIfExist[$i]['pseudo'] || 
        $mail == $checkIfExist[$i]['mail']){
          $result = true;
        }
    }
    return $result;
  }


  public function userRegistered($user)
  {
    $userRegistered = $this->pdo->prepare("INSERT INTO users (pseudo, mail, password) VALUES (:pseudo, :mail, :password)");
    return $userRegistered->execute($user);
  }
}
