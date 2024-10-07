<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

//validate form inputs 
$form = new LoginForm();

if(!$form->validate($email,$password)){
    if( !empty($errors)){
        return view('session/create.view.php', [
            'errors' => $form->errors()]);
    }
}

$auth = new Authenticator();
if ($auth->attempt($email,$password)){
    redirect('/');
}
else{
   #return view('session/create.view.php', [
    #'errors' => "no matching acc for tht email and password"]);

    $form->error('errors' , "no matching acc for tht email and password");

    return view('session/create.view.php', [
        'errors' => $form->errors()]);
}