<?php

namespace MyApp\Util;

class Debug {
  public function dump($data){

    echo "<pre>";
    var_dump($data);
    echo "</pre>";
  }
}