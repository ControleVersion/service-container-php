<?php
namespace Source;
class Product{
  private $db;

  public function __construct(IConn $db){
    $this->db = $db->connect();
  }

  public function list(){
    $query = "Select * FROM products";

    $stmt = $this->db->prepare($query);
    $stmt->execute();

    return $stmt->fetchall(\PDO::FETCH_ASSOC);
  }
}
