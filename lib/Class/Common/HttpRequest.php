<?php

namespace MyApp\Common;

class HttpRequest {


  // HTTP header information
  public $user_agent;
  public $host;
  public $referer;
  
  // URL情報
  public $uri;

  // その他
  public $method;

  public function __construct() {
    if ($_SERVER["SERVER_PROTOCOL"] !== "HTTP/1.1") {
      return;
    }

    $_SERVER["HTTP_USER_AGENT"];

    $this->user_agent = !empty($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : "";
    $this->host = !empty($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : "";
    $this->referer = !empty($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : "";
    $this->uri = !empty($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "";
    $this->method = !empty($_SERVER["REQUEST_METHOD"]) ? $_SERVER["REQUEST_METHOD"] : "";
  }
}