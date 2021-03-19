
<?php 
	

	try{ 
	
		$conx=new PDO('mysql:host=localhost;dbname=students','root','');
		$conx->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conx->exec("SET NAMES 'utf8'");


$num=htmlspecialchars(trim(strtolower($_POST['numInscri'])));
$nom=htmlspecialchars(trim(strtolower($_POST['nom'])));
$prenom=htmlspecialchars(trim(strtolower($_POST['prenom'])));
$age=htmlspecialchars(trim(strtolower($_POST['age'])));
$sexe=htmlspecialchars(trim(strtolower($_POST['sexe'])));
$mail=htmlspecialchars(trim(strtolower($_POST['mail'])));

if (isset($_POST['envoyer'])) {
	
$req=$conx->prepare("insert into etudiant  (numInscri,nom,prenom,age,sexe,mail) values (?,?,?,?,?,?)");
				
				$req->execute(array("$num","$nom","$prenom","$age","$sexe","$mail"));
			
		echo "<script type=\"text/javascript\"> alert(' les données sont inséré');window.location='Formulaire.php';</script>";
}
if (isset ($_POST['liste'])){
    header("Location:liste.php");
}

			

}		

		catch(PDOException $e){
	echo "echec de la connexion" .$e->getMessage(); 

}

?>



