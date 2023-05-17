<?php

namespace app;

class Aula {
  public function listarAulas() {
    $items = scandir("aulas");
    $aulas = [];
    foreach ($items as $key => $item) {
      if(is_dir("aulas/".$item) && $item != "." && $item != "..") {
        $aulas[] = $item;
      }
    }
    return $aulas;
  }

  public function listarConteudoAula($dirAula) {
    $conteudo =  scandir("aulas/".$dirAula);
    return $conteudo;
  }
}