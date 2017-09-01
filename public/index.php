<?php
header('Content-Type: text/html; charset=utf-8');
require_once('../vendor/autoload.php');


use Pimple\Container;

$container = new Container();

$container['date'] = function(){
  return new \DateTime;
};
var_dump($container);
