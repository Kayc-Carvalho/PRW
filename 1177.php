<?php
  $x = readline();

  $n = array();

  for ($i = 0; $i < 1000; $i++) {
    $n[$i] = $i % $x;
    echo "N[$i] = " . $n[$i] . "\n";
  }
?>