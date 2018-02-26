<?php 


class QueryBuilder {


	protected $pdo;

	public function __construct ($pdo) {

		$this->pdo = $pdo;
	}


	public function selectAll($table) {

		$sth = $this->pdo->prepare("SELECT * FROM { $table }");

    	$sth->execute();

    	return $sth->fetchAll(PDO::FETCH_CLASS);
	}
}