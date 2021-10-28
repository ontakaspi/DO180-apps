<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";
if(getenv("DECODER_RING")){
print "the app env is configured";
}else{
  print "sorry, application is not configured correctly"
?>
