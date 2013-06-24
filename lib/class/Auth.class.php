<?php
class Auth extends Teamforspeak{
	
	var $loginPage = "/login.php";


	/**
	* Allow Page for users who have permissions
	* @param $rank
	**/
	function allow($rank){
		global $PDO;
		$roles = array();
		$req   = $PDO->prepare('SELECT slug,rank FROM roles');
		$req->execute();
		$data  = $req->fetchAll();
		foreach($data as $d){
			$roles[$d->slug] = $d->rank;
		}
	}
	
}
?>