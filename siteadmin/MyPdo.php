<?php
class MyPdo
{
	protected $connection;
	public function __construct(){
		try
		{
			$this->conection=new
			PDO('mysql:host=localhost;dbname=si6;charset=utf8','root','');
			//permet de récup les erreurs
			$this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			//affiche le message d'erreur
			echo 'Echec lors de la connetion:'.$e->getMessage();
		}
	}
}