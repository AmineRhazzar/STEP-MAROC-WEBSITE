
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/contact.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link  rel="icon" href="../images/STEP logo/STEP-LOGO3.png" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Open+Sans:ital,wght@0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/30076e29b6.js"
      crossorigin="anonymous"
    ></script>
    <title>STEP - Contact</title>
  </head>
  <body>
        <!-- navigation bar -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <header id="navbar" class="topnav">
          <div id="navbar-mobile">
            <div id="logo"><img class="default" src="./STEP-logo-white.png" alt="">
              <img class="animate" src="./STEP-logo.png" alt="">
            </div>
            <div id="icon"> <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i></a>
            </div>
          </div>
            <div class="mobile">
              <a href="./contact.php" class="item" id="active">Contact</a>
              <a href="./about.html" class="item" >About</a>
              <a href="./capital.html" class="item">Capital</a>
              <a href="./domaines.html" class="item">Domaines</a>    
              <a href="../index.html" class="item">Acceuil</a>
            </div>
        </header>
        <div class="opening">
          <div class="domaines-titre">
            <h1>TITLE</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora magnam iusto corrupti labore nihil rem earum nam quibusdam provident. Maxime eaque illo possimus sapiente voluptates sit neque, praesentium velit natus.</p>
          </div>      
        </div>  

    <div class="container">
      <div class="adress">
        <div class="group">
          <h3><i class="fas fa-envelope"></i>Email</h3>
          <p>contact@stepmaroc.ma</p>
        </div>
        <div class="group">
          <h3><i class="fas fa-phone"></i>Phone Number</h3>
          <p>+212 522 226 290</p>
        </div>
        <div class="group">
          <h3><i class="fas fa-map-marker-alt"></i>Adress</h3>
          <p>223, Bd. Abdelmoumen Résidence Reda, N°2, Casablanca, Maroc.</p>
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13297.090707655436!2d-7.6257539!3d33.5722688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec989a5e92b13873!2sStep!5e0!3m2!1sfr!2sma!4v1613989423237!5m2!1sfr!2sma"
              allowfullscreen=""
            ></iframe>
        </div>
      </div>
    </div>
      <div class="contact-form">
          
        <h1>Contactez-Nous&nbsp;!</h1>
        <?php 
          $Msg = "";
          if(isset($_GET['error']))
          {
              $Msg = " Veuillez remplir tous les champs ";
              echo '<div class="alert alert-danger">'.$Msg.'</div>';
          }

          if(isset($_GET['success']))
          {
              $Msg = " Votre message a été envoyé ";
              echo '<div class="alert alert-success">'.$Msg.'</div>';
          }
        ?>        
        <form action="./process.php" method="post">
          <div class="form-group">
            <label for="inputName">Nom Complet</label>
            <input
              type="text"
              class="form-control"
              id="inputName"
              name="name"
              required
            />
          </div>
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input
              type="email"
              class="form-control"
              id="inputEmail"
              name="email"
              required
            />
          </div>
          <div class="form-group">
            <label for="inputSubject">Objet</label>
            <input
              type="text"
              class="form-control"
              id="inputSubject"
              name="subject"
              required
            />
          </div>
          <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea
              class="form-control"
              id="inputMessage"
              name="msg"
              rows="5"
              required
            ></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="btn-send">
              <i class="fa fa-paper-plane"></i> Send
            </button>
          </div>
        </form>
      </div>
    </div>
    
    <footer>         
      <footer class="footer">
          <div class="footer-left col-md-4 col-sm-6">
            <p class="about">
              <span style="color: #FEBF00;"> À propos de l'entreprise</span> STEP est une société de Travaux et d’exécution de Projets qui opère dans plusieurs domaines de construction. Avec une capacité de réaliser des travaux d’infrastructures terrestres de grande envergure et mettre en place des solutions innovantes, STEP arrive à concevoir et à concrétiser les projets les plus complexes.
            </p>
          
          </div>
          <div class="footer-center col-md-4 col-sm-6">
            <div>
              <i class="fa fa-map-marker"></i>
              <p id="info">223, Bd.Abdelmoumen <br>
                Résidence Reda, <br> N°2, Casablanca, Maroc</p>
          
            </div>
            <div>
              <i class="fa fa-phone"></i>
              <p id="info">Fix: +212 522 226 290</p>
            </div>
            <div>
              <i class="fa fa-phone"></i>
              <p id="info">Fax: +212 522 226 429</p>
            </div>
            <div>
              <i class="fa fa-envelope"></i>
              <p id="info"><a href="#">contact@stepmaroc.ma</a></p>
            </div>
          </div>
          <div class="footer-right col-md-4 col-sm-6">
            <div id="logo2">          <img class="animate" src="./STEP-logo-white.png" alt="">
            </div>                <p class="menu">
              <a href="../index.html"> Acceuil</a> |
              <a href="./domaines.html"> Domaines</a> |
              <a href="./capital.html"> Capital</a> |
              <a href="./about.html"> About</a> |
              <a href="./contact.php" id="active"> Contact</a> |
            </p>
            <p class="name"> STEP Maroc &copy; 2021</p>
          </div>
        </footer>
  </footer>     
  </body>
</html>
<script src="../js/animation.js"></script>