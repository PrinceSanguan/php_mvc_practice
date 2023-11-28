<?php

class Home extends controller
{
  public function index($a = "", $b = "", $c = "")
  {
    echo "This is the home Controller";

    $this->view("home");
  }
}
