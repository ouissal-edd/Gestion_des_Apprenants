
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/StyleFormulaire.css">
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
    

   <!-- formulaire -->
    <div class="countainer">
        <h1>Formulaire SCOOL SHAND</h1>


        <div class="content">
            <div class="Box_illu">
                <img class="illustration" src="../images/form.png" alt="">
            </div>
 
         

            <form action="traitement.php"  method="POST" name="Formstud">

                <label>number Inscription</label>
                <input id="numInscri" onkeyup="validateNumInscri()" name="numInscri"  require><br>
                <span id="error"></span> <br>



                <label>Last Name</label>
                <input  id="nom" onkeyup="validateNom()" type="text" name="nom" require><br>
                <span id="error1"></span><br>



                <label>First Name</label>
                <input  id="prenom" onkeyup="validatePrenom()" type="text" name="prenom" require><br>
                <span id="error2"></span><br>


                <label>Age</label>
                <input   id="age" onkeyup="validateAge()" type="number" name="age" require><br>
                <span id="error3"></span><br>


                <label>Gender</label>
                <input  style=" outline: none;" id="sexe" onkeyup="validateGender()" type="text" name="sexe" require><br>
                <span id="error4"></span><br>
                

                <label>Email</label>
                <input  id="mail" onkeyup="validateEmail()" type="email" name="mail" require><br>
                <span id="error5"></span><br>


                <input id="Btn"  style=" outline: none;" class="Btn" type="submit"  name="envoyer" value="sent">
                <a href="liste.php" > <input   style=" outline: none;" class="Btn" type="submit" name="liste" value="liste"></a>

            </form>
        </div>
    </div>
    <!-- end formulaire -->

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
   <!-- end footer -->
    <script src="../JS/form.js"></script>
    <script src="../JS/app.js"></script>


</body>


</html>