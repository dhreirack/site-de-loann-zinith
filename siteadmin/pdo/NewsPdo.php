<?php
class NewsPdo extends MyPdo{
	public function __construct(){
		try{
			parent::__construct();
		}
		catch(PDOException $e){
			echo'Echec lors de la conection:'.$e->getMessage();
		}
	}
}