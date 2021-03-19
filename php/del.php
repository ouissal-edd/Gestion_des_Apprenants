<?php
try{ 
		
		$conx=new PDO('mysql:host=localhost;dbname=students','root','');
		$conx->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conx->exec("SET NAMES 'utf8'");

	$num=$_GET['numInscri'];
	
	 $req=$conx->prepare("DELETE FROM etudiant WHERE numInscri=$num ");
	 $req->execute();


	 if ($req) {
	 	echo "<script type=\"text/javascript\"> alert(' les données sont supprimé');window.location='liste.php';</script>";
	 }

}


catch(PDOException $e){
	echo "echec de la connexion" .$e->getMessage(); 

}
	?>

