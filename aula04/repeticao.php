<?php

$i = 1;

  while ($i < 6) {
    echo $i;
    echo "<br>";
    $i++;
}
    
echo "--------- <br>";

$i = 1;

do {
    echo $i;
    $i++;
    echo "<br>";
} while ($i < 6);

echo " --------- <br>";

for ($x = 0; $x <= 10; $x++) {
    echo "O número é: $x <br>";
}

?>