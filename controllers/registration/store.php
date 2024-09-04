<?php

use Core\Validator;
use Core\App;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

//validate form inputs
$errors = [];

if (!Validator::email($email)){
    $errors['email']= 'provide a valid email address';
}

if (!Validator::string($password,5,255)){
    $errors['password']= 'provide a password of atleast 7 chars';
}

if(! empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors]);
}

$db = App::container()->resolve(Database::class);

//check if account already exists
$query = "select * from users where email = :email";

$user = $db->query($query,['email' => $email])->find();

if($user){
    redirect('/');
} else{
    $query = "insert into users(email,password) values(:email,:password)";
        $db->query($query,['email' => $email,'password' => $password]);
}

//mark user has logged in 
$_SESSION['user'] = [
    'email' => $email
];

redirect('/');