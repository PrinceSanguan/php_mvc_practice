<?php

/** 
 * Main Model Class
*/

class Model
{

  use Database;
  protected $table = "users";

  public function where($data, $data_not)
  {
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);
    $query = "";

    foreach ($keys as $key) {
      $query = $key . "=:". $key . " && ";
    }
    
    foreach ($keys_not as $key) {
      $query = $key . "!= :". $key . " && ";
    }

    $query = trim($query, " && ");

    $query = "select * from $this->table where id = :id && date = now() && id != :id";
    $this->query($query, ["id"=>23]);
  }

  public function first($data, $data_not)
  {

  }


  public function insert($data)
  {

  }

  public function update($id, $data, $id_column = "id")
  {
    
  }

  public function delete($id, $id_column = "id")
  {
    
  }
}