<?php


class Film extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "films";

	public function findType() { 
	$query = $this->dbConnection->from($this->table_name)->where("isActive", 1);
	return $query->fetchAll();
	}
}