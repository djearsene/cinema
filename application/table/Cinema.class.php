<?php
/**
Classe créé par le générateur.
*/
class Cinema extends Table {
	public function __construct() {
		parent::__construct("cinema", "ci_id");
	}
	public function selectAllcinema(): array
	{
		$sql="select * from cinema order by cin_id";
		$result=self::$link->query($sql);
		return $result->fetchAll();
	}
	
	
}
?>
