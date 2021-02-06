<?php

namespace MyApp\Common;

class TokenHandler {

  public function __construct() {
    // ここでモードごとの挙動の定義をしてもいい

  }
  
  public function create() {
    $token = bin2hex(openssl_random_pseudo_bytes(16));
    $_SESSION["token"] = $token;
    return $token;
  }

  public function evaluate($token = null) {
    if (!empty($token) && $token === $_SESSION["token"]) {
      return true;
    } else {
      return false; //例外処理を実装するのもいいね
    }
  }
}