<?php


class Youtuber extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "youtubers";
  
	public function findType() { 
	$query = $this->dbConnection->from($this->table_name)->where("isActive", 1);
	return $query->fetchAll();
	}
}