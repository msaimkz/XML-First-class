<?php
$xml = New DOMDocument();
$xml-> load("emp.xml");
if($xml-> validate()){
  echo "valid";
}
else{
  echo "not valid";
}
?>