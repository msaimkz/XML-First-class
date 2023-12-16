<?php
$xml =new DomDocuments();
$xml->load("schema.xml")
if($xml->schemaValidate("schema.xsd")){
echo "valid"
}
else{
  echo "not valid"
}
?>