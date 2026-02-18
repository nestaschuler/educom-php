<?php
function divide($x, $y) {
  if($y == 0) {
    throw new Exception("Cannot divide by zero.");
  }
  return $x / $y;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  $file = $e->getFile();
  $line = $e->getLine();
  $code = $e->getCode();
  $message = $e->getMessage();
  echo "Exception thrown in $file on line $line: [Code $code] $message";
}
?>