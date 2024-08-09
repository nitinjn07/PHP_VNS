<?php 
  
  $info = array('Hello','Hi','How','R','U');


  $data = " Today class is based on PHP ";
  echo $data."<br/>";
  echo "Length of String ".strlen($data)."<br/>";
  echo "Reverse of String ".strrev($data)."<br/>";
  echo "Replace ".str_replace("PHP","JAVA",$data)."<br/>";
  echo "Position ".strpos($data,"c")."<br/>";
  echo "Uppercase ".strtoupper($data)."<br/>";
  echo "Lower case ".strtolower($data)."<br/>";
  echo " ".trim($data," T")."<br/>";


   print_r($info);

   echo implode("-",$info);

   print_r(explode(" ",$data));
  
  echo md5("Hello");

 
?>