<?php

class DATABASE
{
  private function connect()
  {
    $string = "mysql:host=" . DBHOST . ";port=3307;dbname=" . DBNAME;
    $con = new PDO($string, DBUSER, DBPASSWORD);
    return $con;
  }

  public function query($query, $data = []) 
  {
    $con = $this->connect();
    $stm = $con->prepare($query);

    $check = $stm->execute($data);
    if($check)
    {
      $result = $stm->fetchAll(PDO::FETCH_OBJ);
      if(is_array($result) && count($result))
      {
        return $result;
      }
    }
    return false;
  }
}





