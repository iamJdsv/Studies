<?php
/**
 * Page d'accueil
 */
class IndexController {
  public function index($req, $res){
    // Modèle Film
    $film = new Film();
    $rows = $film->find();

    $youtuber = new Youtuber();
    $rows2 = $youtuber->find();

    $res->html("index.php", array("films" => $rows, "youtubers" => $rows2));
  }
}