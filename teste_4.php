<?php
function processa_operacoes($n, $operacoes) {

    $lista = array_fill(1, $n, 0);

    foreach ($operacoes as $op) {
      list($a, $b, $v) = $op;
      for ($i = $a; $i <= $b; $i++) {
        $lista[$i] += $v;
      }
    }
    
    $maior_valor = max($lista);
    
    return $maior_valor;
  }

  $operacoes = array(
    array(1, 2, 100),
    array(2, 5, 100),
    array(3, 4, 100)
  );
  
  $maior_valor = processa_operacoes(5, $operacoes);
  echo "Maior valor final na lista: " . $maior_valor; 