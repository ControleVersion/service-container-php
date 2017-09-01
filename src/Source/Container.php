<?php
namespace Source;
class Container{
  public static function gerProduct(){
    return new Product();
  }

  public static function getConn()
  {
    return new Conn("mysql:host=localhost;dbname=teste_oo", "root", "");
  }
}
