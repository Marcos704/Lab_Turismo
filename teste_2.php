<?php

  function fibonacci($n) {
    $aux = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
      $aux[] = $aux[$i - 1] + $aux[$i - 2];
    }
    sort($aux);
    return $aux;
  }
  
  // Testando o código //
  $n = 5;
  $resultado = fibonacci($n);
  echo '<pre>';
  print_r($resultado);
  echo '</pre>';