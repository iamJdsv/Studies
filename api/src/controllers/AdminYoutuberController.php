<?php

class AdminYoutuberController extends BaseController {

  public function getData() {
    // Attention, il faut renseigner que les champs présents dans la base de données
    return array(
      "nom" => $_POST["nom"],
      "description"=> $_POST["description"],
      "photo" => $_POST["photo"],
      "isActive" => $_POST["isActive"]
    );
  }

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $youtuber = new Youtuber();
    $rows = $youtuber->find();
    $res->html("admin/youtubers.php", array("youtubers" => $rows));
  }

  public function add($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $youtuber = new Youtuber(); 
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $youtuber->insert($this->getData());
        $this->redirect("/admin/youtubers");
    } else {
        $res->html("admin/youtuber.php", array());
    }
  }

  public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $youtuber = new Youtuber();
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $youtuber->update($_GET["id"], $this->getData());
        $this->redirect("/admin/youtubers");
    } else {
        $row = $youtuber->findOne($_GET["id"]);
        $res->html("admin/youtuber.php", $row);
    }
  }

  public function delete($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $youtuber = new Youtuber();
    $youtuber->delete($_GET["id"]);
    $this->redirect("/admin/youtubers");
  }
}