<?php 

$filename = "allwords.txt";
if(file_exists($filename)){
	$allwords = file_get_contents($filename);
  
  $filtered = [];
  if (preg_match_all('/\[([^\]]*)\]/', $allwords, $filtered)) {
    foreach($filtered[1] as $word){
      echo $word."\n";
    }
  }
}
