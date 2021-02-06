<?php

namespace MyApp\Common;

class HttpResponse {

  public function json(){
    header("Content-Type: application/json");
    echo json_encode($arr);
  }

  public function csv_out1($filepath, $filename){
    
    header("Content-Disposition: attachment; filename=" . $filename);
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: binary");
    header("Content-length: ". filesize($filepath));

    readfile($filepath);
  }

  public function csv_out2($arr, $filename){

    $f = fopen("temp_hapihapi.csv", "w");
    foreach ($arr as $line) {
      fputcsv($f, $line);
    }
    fclose($f);

    header("Content-Disposition: attachment; filename=" . $filename);
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: binary");
    header("Content-length: ". filesize("./temp_hapihapi.csv"));

    readfile("./temp_hapihapi.csv");
    unlink("./temp_hapihapi.csv");
  }
}