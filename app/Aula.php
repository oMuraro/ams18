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
    if(!is_dir("aulas/".$dirAula)) {
      return "Aula não encontrada";
    }

    $conteudo =  scandir("aulas/".$dirAula);
    return json_encode($conteudo);
  }

  public function lerDadosAulas()
  {
    $conteudo = file_get_contents("aulas/dadosAulas.json");
    return $conteudo;
  }

  public function criarHash($conteudo)
  {
    // gerar um hash com o algoritmo sha256
    // returna o hash criado.
    $conteudoHash = hash("sha256", $conteudo);
    return $conteudoHash;
  }
}