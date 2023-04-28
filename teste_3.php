<?php
function encontra_sequencia_magica($s) {
    $vogais = array('a', 'e', 'i', 'o', 'u');
    $vogal_atual = 0;
    $comprimento_atual = 1;
    $comprimento_maximo = 0;
    
    for ($i = 1; $i <= strlen($s); $i++) {
      if ($s[$i - 1] == $vogais[$vogal_atual]) {
        $vogal_atual++;
        if ($vogal_atual == 5) {
          $comprimento_maximo = max($comprimento_maximo, $comprimento_atual);
          $vogal_atual = 0;
          $comprimento_atual = 1;
        }
      } else {
        $comprimento_atual++;
      }
    }
    
    return $comprimento_maximo;
  }
  


// Exemplo de uso
  $s = 'aeiaaioooaauuaeiou';
  $resultado = encontra_sequencia_magica($s);
  echo "Resultado: ".$resultado; // saída: 8