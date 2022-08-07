<?php

function activeNav($page){
  $active = trim($_SERVER['REQUEST_URI'],'/') == $page ;
  if($active){
    return 'text-blue-600 font-bold' ;
  }
    return 'text-gray-400 hover:text-gray-500' ;
  
}