<?php

  function orndenarArray($arr) {
  $auxTotalValores = array_count_values($arr);
  $auxArray = array();
  foreach ($auxTotalValores as $num => $arr) {
    $auxArray[$arr][] = $num;
  }
  foreach ($auxArray as &$subarray) {
    sort($subarray);
  }
  unset($subarray);
  $resultado = array();
  foreach ($auxArray as $subarray) {
    foreach ($subarray as $num) {
      for ($i = 0; $i < $auxTotalValores[$num]; $i++) {
        $resultado[] = $num;
      }
    }
  }
  return $resultado;
}


 // Testando o código 
$arr = array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4);
$resultado = orndenarArray($arr);
echo '<pre>';
print_r($resultado);
echo '</pre>';
