<?php

namespace App\Controllers;
use App\Core\App;

class UserController {

  public function addUser(){
    App::get('database')->insert('user_info', [
      'name'=> $_POST['name'],
      'email'=>$_POST['email'],
      'phone'=>$_POST['phone'],
      'country'=>$_POST['country'],
    ]) ;

    redirect('/');
  }
}