<?php

return [
  "database"=>[
    'name'=>'php_crud',
    'username'=>'root',
    'password'=>'',
    'connection'=>'mysql:host=127.0.0.1',
    'options'=>[
      // Error Show For debug 
      PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]
  ]
  ];