
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/StyleListeEtudiants.css">
    <title>Formulaire</title>
</head>

<body>

    <!-- navbar -->

    <div class="navigation">
        <h1 class="logo">SHAND</h1>
        <div class="menuContent">
            <h4><a href="../index.html">Home</a></h4>
            <h4><a href="../gallery.html">Gallery</a></h4>
            <h4><a href="../aboutus.html">About Us</a></h4>
        </div>

        <h1 id="xIcon" class="xIcon">&times;</h1>
        <div id="burgerMenu" class="burgerMenu" style="display: none;">
            <h1 class="min">&minus;</h1>
            <h1 class="min">&minus;</h1>
            <h1 class="min">&minus;</h1>
        </div>
    </div>

    <div id="navigationPopup" class="navigationPopup" style="display: none;">
        <h4><a class="content" href="../index.html">Home</a></h4>
        <hr>
        <h4><a class="content" href="../gallery.html">Gallery</a></h4>
        <hr>
        <h4><a class="content" href="../aboutus.html">About Us</a></h4>
        <hr>
    </div>
    <img class="photonav" src="../images/navBack.png" alt="">
    <!-- end navbar -->
  <?php  try{ 
	
    $conx=new PDO('mysql:host=localhost;dbname=students','root','');
    $conx->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conx->exec("SET NAMES 'utf8'");





        

}		

    catch(PDOException $e){
echo "echec de la connexion" .$e->getMessage(); 

}
?>

   <h1 class="titletable">School Liste Students</h1>
   <div class="Boxillus">
   <img src="../images/listeEtu.png" alt="">

      </div>
<?php 

$requet=$conx->prepare("SELECT * from etudiant");

		$requet->execute();
	
		$rslt=$requet->fetchall();
	
		$i=0; ?>
	
       
		<table class="TableLis">
		<tr>
        <th>Number Inscription</th>
        <th>Last Name</th>
        <th class="supp">First Name</th>
        <th class="supp">Age</th>
        <th >Gender</th>
        <th class="supp">Email</th>
        
</tr>
		<?php while ( $i< count($rslt)) { ?>
			
               <tr>
				<td><?php echo $rslt[$i]['numInscri']; ?></td>
                <td><?php echo $rslt[$i]['nom'];?></td>
                <td class="supp"><?php echo $rslt[$i]['prenom'];?></td>
                <td class="supp"><?php echo $rslt[$i]['age'];?></td>
                <td ><?php echo $rslt[$i]['sexe'];?></td>
                <td class="supp"><?php echo $rslt[$i]['mail'];?></td> 
			    


				</tr>
                <?php	$i=$i+1;
			}	?>
            </table>
               
            

			

 
 
    







    <!-- footer -->

    <img src="../images/footerbackg.png" alt="" class="ftrImg">
    <footer class="ftrContainer">
        <div class="page">
            <h1 class="pageheader">Page</h1>
            <div class="elemContainer">
                <div class="logos">
                    <img src="../images/home.png" alt="" class="logoo">
                    <img src="../images/Gallery.png" alt="" class="logoo">
                    <img src="../images/about.png" alt="" class="logoo">
                </div>
                <div class="textLogos">
                    <h class="textt">Home</h>
                    <h class="textt">Gallery</h>
                    <h class="textt">About Us</h>
                </div>
            </div>
        </div>

        <div class="connect">
            <h1 class="pageheader">Connect</h1>
            <div class="elemContainer">
                <div class="logos">
                    <img src="../images/mail.png" alt="" class="logoo">
                    <img src="../images/phone.png" alt="" class="logoo">
                </div>
                <div class="textLogos">
                    <h class="textt">shand@godknowswhat.meh</h>
                    <h class="textt">(831) 334-3546</h>
                </div>
            </div>
        </div>

        <div class="contact">
            <h1 class="pageheader">Contact</h1>
            <div class="elemContainer">
                <div class="logos">
                    <img src="../images/facebook.png" alt="" class="logoo">
                    <img src="../images/insta.png" alt="" class="logoo">
                    <img src="../images/twitter.png" alt="" class="logoo">
                </div>
                <div class="textLogos">
                    <h class="textt">Facebook</h>
                    <h class="textt">Instagram</h>
                    <h class="textt">Twitter</h>
                </div>
            </div>
        </div>


    </footer>
    <script src="../JS/app.js"></script>

   <!-- end footer -->
    

</body>


</html>