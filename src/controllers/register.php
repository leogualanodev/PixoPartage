<?php

const EMPTY_INPUT = "Ce champ est incorrect";
const ERROR_CHECK_PASSWORD = "Vos mots de passes ne correspondent pas";
const ERROR_INVALID_MAIL = "Mail non valide";

$errors = [
  'pseudo' => '',
  'mail' => '',
  'password' => '',
  'confirmPass' => '',
];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $input = filter_input_array(INPUT_POST, [
    'pseudo' => FILTER_SANITIZE_SPECIAL_CHARS,
    'mail' => FILTER_SANITIZE_EMAIL,
    'password' => FILTER_SANITIZE_SPECIAL_CHARS,
    'confirmPass' => FILTER_SANITIZE_SPECIAL_CHARS
  ]);

  $pseudo = $input['pseudo'] ?? '';
  $mail = $input['mail'] ?? '';
  $password = $input['password'] ?? '';
  $confirmPass = $input['confirmPass'] ?? '';

  if(empty($pseudo)){

  }

}