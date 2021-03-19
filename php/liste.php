
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/liste.css">
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
   <h1 class="titletable">Select Students</h1>
  
      
<?php 

$requet=$conx->prepare("SELECT * from etudiant");

		$requet->execute();
	
		$rslt=$requet->fetchall();
	
		$i=0; ?>
	
       
		<table class="TableLis">
		<tr>
        <th>Number Inscription</th>
        <th class="supp">Last Name</th>
        <th class="supp">First Name</th>
        <th class="supp">Age</th>
        <th class="supp">Gender</th>
        <th class="supp">Email</th>  
        <th>Up Date</th>
        <th>Delete</th>
</tr>
		<?php while ( $i< count($rslt)) { ?>
			
               <tr>
				<td><?php echo $rslt[$i]['numInscri']; ?></td>
                <td class="supp"><?php echo $rslt[$i]['nom'];?></td>
                <td class="supp"><?php echo $rslt[$i]['prenom'];?></td>
                <td class="supp"><?php echo $rslt[$i]['age'];?></td>
                <td class="supp"><?php echo $rslt[$i]['sexe'];?></td>
                <td class="supp"><?php echo $rslt[$i]['mail'];?></td> 
			
				<!-- modifier -->	
                <td> <a href="liste.php?update=<?php echo $rslt[$i]['numInscri']; ?>"><img style="width: 30px" src="../images/refresh.png" alt=""></a></td>
               
				  	<!-- supprimer -->


                <td> <a href="del.php?numInscri=<?php echo $rslt[$i]['numInscri'];?> "><img style="width: 30px" src="../images/remove.png" alt=""></a></td>
             
               


				</tr>
                <?php	$i=$i+1;
			}	?>
            </table>
               
                <?php if(isset($_GET['update'])) {

                    $num = $_GET['update'];
                    $requet=$conx->prepare("SELECT * from etudiant where numInscri= $num");

                    $requet->execute();
                
                    $rslt_2=$requet->fetch();
                    
                    ?>
                    

        <div class="content">
          
            <form action="up.php"  method="POST" id="Formstud">

                <label>number Inscription</label>
                
                <span id="error"></span> <br>
                <input id="numInscri"  onkeyup="validateNumInscri()" name="numInscri" value="<?php echo $rslt_2['numInscri'];?>" require><br>



                <label>Last Name</label>

                <input  id="nom" onkeyup="validateNom()" type="text"  name="nom" value="<?php echo $rslt_2['nom'];?>" require><br>
                <span id="error1"></span><br>



                <label>First Name</label>
                <input  id="prenom" onkeyup="validatePrenom()" type="text" name="prenom" value="<?php echo $rslt_2['prenom'];?>" require><br>
                <span id="error2"></span><br>


                <label>Age</label>
                <input   id="age" onkeyup="validateAge()" type="number" name="age" value="<?php echo $rslt_2['age'];?>" require><br>
                <span id="error3"></span><br>


                <label>Gender</label>
                <input  style=" outline: none;" id="sexe" onkeyup="validateGender()" type="text" value="<?php echo $rslt_2['sexe'];?>" name="sexe" require><br>
                <span id="error4"></span><br>
                

                <label>Email</label>
                <input  id="mail" onkeyup="validateEmail()" type="email" name="mail" value="<?php echo $rslt_2['mail'];?>" require><br>
                <span id="error5"></span><br>


                <input  style=" outline: none;" class="Btn" type="submit" name="upup" value="UPDATE">

            </form>
        </div>
   

    <?php } ?>
			

 
 
    







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

        <script src="../JS/app.js"></script>
    </footer>
   <!-- end footer -->
    

</body>


</html>