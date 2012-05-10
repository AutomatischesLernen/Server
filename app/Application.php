<?php

$controllers = array("User");

include_once '../libraries/epiphany/Epi.php';
Epi::setPath('base', '../libraries/epiphany');
Epi::init('api');


foreach($controllers as $current)
{
  require "controllers/".$current.".php";
  call_user_func(array($current, "register"));
}

getRoute()->get("/", "home");

function home()
{
  echo "Hallo";
}

getRoute()->run();