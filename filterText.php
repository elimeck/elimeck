<?php 

$filename = "allwords.txt";
if(file_exists($filename)){
  $allwords = file_get_contents($filename);
  
  if (preg_match_all('/\[([^\]]*)\]/', $allwords, $filtered)) {
    print_r($filtered[1]);
  }
}

