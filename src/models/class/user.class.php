<?php
require_once('./src/models/class/database.class.php');

class User extends Database
{

  public int $id;
  public string $pseudo;
  public string $mail;
  private string $password;
  public string $avatar;

  public function __construct()
  {
    parent::__construct();
  }

  // public function checkIfUserExist($pseudo, $mail)
  // {
  //   $checkIfUserExist = $this->pdo->prepare("SELECT pseudo, mail FROM users ");
  //   $checkIfUserExist->execute();
  //   $checkIfExist = $checkIfUserExist->fetchAll();
  //   $result = false;
  //   for ($i=0; $i < count($checkIfExist); $i++) { 
  //     if($pseudo == $checkIfExist[$i]['pseudo'] || 
  //     $pseudo == $checkIfExist[$i]['mail']){
  //       $result = true;
  //     }
  //   }
  //     for ($i=0; $i < count($checkIfExist); $i++) { 
  //       if($mail == $checkIfExist[$i]['pseudo'] || 
  //       $mail == $checkIfExist[$i]['mail']){
  //         $result = true;
  //       }
  //   }
  //   return $result;
  // }

  public function checkIfUserExist($pseudo, $mail){
    $checkIfUserExist = $this->pdo->prepare("SELECT * FROM users WHERE pseudo = :pseudo OR mail = :mail");
    $checkIfUserExist->bindParam('pseudo', $this->pseudo);
    $checkIfUserExist->bindParam('mail', $this->mail);
    return $checkIfUserExist->execute();
    // return $checkIfExist = $checkIfUserExist->fetchAll();
  }

  public function userRegistered($user)
  {
    $userRegistered = $this->pdo->prepare("INSERT INTO users (pseudo, mail, password) VALUES (:pseudo, :mail, :password)");
    return $userRegistered->execute($user);
  }

  // function checkIfPasswordOK($password, $pseudo)
  // {
  //   $checkIfPasswordOkExist = $this->pdo->prepare("SELECT password FROM users WHERE pseudo=:pseudo OR email=:email");
  //   $checkIfPasswordOkExist->BindParam(":pseudo", "$pseudo");
  //   $checkIfPasswordOkExist->BindParam(":email", "$pseudo");
  //   $checkIfPasswordOkExist->execute();

  //   $return = $checkIfPasswordOkExist->fetchAll();
  //   $result = false;

  //   if ($password == $return[0]["password"]) {
  //     $result = true;
  //   }
  //   return $result;
  // }
}


