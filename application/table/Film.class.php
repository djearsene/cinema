<?php
/**
Classe créé par le générateur.
*/
class Film extends Table {
	public function __construct() {
		parent::__construct("film", "fi_id");
	}
	public function selectAllfilm(): array
	{
		$sql="select * from film order by fil_id";
	}
}
?>
