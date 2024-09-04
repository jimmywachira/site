<?php

if($_SESSION['user'] ?? false){
    redirect('/');
}

view('registration/create.view.php');