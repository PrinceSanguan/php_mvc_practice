<?php

/** 
 * Main Model Class
*/

class Model extends Database 
{
  function test()
  {
    $query = "select * from users";
    $result = $this->query($query);
  }
}