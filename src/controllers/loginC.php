<?php
// require_once __DIR__ . './../models/class/user.class.php';

// const ERROR_CONNECT = "Vos identifiants ou mots de passes sont incorrects" ;
// const ERROR_EMPTY = "Veuillez rentrez vos informations" ;


// $errors = [
//     'notConnect' => '',
//     'empty' => '',
// ];

// if ( $_SERVER['REQUEST_METHOD'] === 'POST') {
//     $input = filter_input_array(INPUT_POST , [
//         'pseudo-mail' => FILTER_SANITIZE_SPECIAL_CHARS,
//         'password' => FILTER_SANITIZE_SPECIAL_CHARS,
//     ]);

//     $pseudo_mail = $input['pseudo-mail'] ?? '';
//     $password = $input['password'] ?? ''; // sécu erreur de null

//     if ( empty($pseudo)){
//         $errors["empty"] = ERROR_EMPTY ;
//     } else if ( empty($password)){
//         $errors["empty"] = ERROR_EMPTY ;
//     } 

//     if ( checkIfUserExist($pseudo_mail , $pseudo_mail) == false ){
//         $errors["notConnect"] == ERROR_CONNECT ;
//     } else {
        
//     }
// }