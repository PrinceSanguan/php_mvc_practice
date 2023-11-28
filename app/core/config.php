<?php

if($_SERVER["SERVER_NAME"] == "localhost")
{
  define("ROOT", "http://localhost/php_mvc/public");
} else 
{
  define("ROOT", "https://www.unknown.free.nf");
}