<?php
$numeros = array();

for ($i = 0; $i < 10; $i++) {
  $numeros[$i] = rand(0, 100);
}

echo "Os números sorteados são: ";
for ($i = 0; $i < 10; $i++) {
  echo $numeros[$i] . " ";
}
?>
