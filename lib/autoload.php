<?php

spl_autoload_register(function($class) {
  $prefix = "MyApp\\";
  $base_dir ="./lib/Class/";

  if (strpos($class, $prefix) === 0) {
    $filename = $base_dir . str_replace("\\", "/", substr($class, strlen($prefix))) . ".php";

    if (file_exists($filename)) {
      require_once($filename);
    }
  }
});