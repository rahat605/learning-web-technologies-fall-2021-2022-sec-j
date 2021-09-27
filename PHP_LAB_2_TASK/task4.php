<?php
function largest($a, $b, $c) {
  $max=$a;
  if ($a>=$b&&$a>=$c)
    $max=$a;
  if ($b>=$a&&$b>=$c)
    $max=$b;
  if ($c>=$a&&$c>=$b)
    $max=$c;
  echo "Largest number among $a, $b and $c is = $max\n";
}
largest(10, 20, 30);
?>