
<?php
try{ 
		
		$conx=new PDO('mysql:host=localhost;dbname=students','root','');
		$conx->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conx->exec("SET NAMES 'utf8'");
	}
		catch(PDOException $e){
	echo "echec de la connexion" .$e->getMessage(); 

}




 

try{ 
		
		$conx=new PDO('mysql:host=localhost;dbname=students','root','');
		$conx->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conx->exec("SET NAMES 'utf8'");

if (isset($_POST['upup'])) {
 
    $num=$_POST['numInscri'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $sexe=$_POST['sexe'];
    $mail=$_POST['mail'];
	$req=$conx->prepare("UPDATE `etudiant` SET `nom`=?,`prenom`=?,`age`=?,`sexe`=?,`mail`=? where numInscri=?");

	$req->execute([$nom,$prenom,$age,$sexe,$mail,$num]);



	if ($req) {
		echo "<script type=\"text/javascript\"> alert(' les données modifier');window.location='liste.php';</script>";
		
	}
	
}

}
catch(PDOException $e){
	echo "echec de la connexion" .$e->getMessage(); 

}


?>