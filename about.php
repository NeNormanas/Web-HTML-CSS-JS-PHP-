<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>APIE</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>

<div class="navbar-fixed">

  <nav class="purple">
  	<div class="container">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo normanas">MotherLand</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      	<li><a href="about.php">Apie</a></li>
        <li><a href="badges.html">Naujienos</a></li>
        <li><a href="product.php">Prekes</a></li>
        <li><a href="mobile.html">Registruotis</a></li>
      </ul>
    </div>
	  </div>
  </nav>
  </div>
  
  <ul class="sidenav" id="mobile-demo">
    <li><a href="about.php">Apie</a></li>
    <li><a href="about.php">Naujienos</a></li>
    <li><a href="product.php">Prekes</a></li>
    <li><a href="product.php">Registruotis</a></li>
  </ul>


<div class="parallax-container n-papildomai">

	<h1 class="center-align parallax-antraste apie-mus">
    <span class="white spanas">Apie mus</span>
  </h1>


      <div class="parallax"><img src="http://www.ramosyasociadoshn.com/images/placeholder/team.png"></div>
    </div>
    </div>

 

<div class="container papildomai">



	<div class="row">
		<div class="lenteles">


      <div class="col s4 center-align Normano-h2stilius">
      	<img class="materialboxed norm-pav"src="https://previews.123rf.com/images/panya7/panya71708/panya7170800095/83270949-bangkok-thailand-june-9-2017-inside-of-esplanade-shopping-mall-in-bangkok-the-esplanade-is-a-shoppin.jpg" width="201" height="300">
				<h3>Apie mus</h3>
         <p>Didžiausias Baltijos šalių mažmeninės prekybos tinklo istorija pradėta 1992 metais, Vilniuje atidarius kelias parduotuves su skirtingais pavadinimais. Šiandien prekybos tinklo MotherLand kūrimosi istoriją galima drąsiai vadinti verslo sėkmės istorija, nes po Nepriklausomybės paskelbimo Baltijos šalyse nė viena įmonė nesulaukė tokios finansinės sėkmės, žinomumo visuomenėje ir pirkėjų įvertinimo.</p>
      </div>
      <div class="col s4 Normano-h2stilius">
      	<img class="materialboxed norm-pav"src="http://www.snaujienos.lt/images/Nuotraukos/2016/11/05/2016-11-05_09.jpg" width="201" height="300">
				<h3>Vertybės</h3>
        <p>„Dirbame pirkėjams“:Dirbame taip, kad pirkėjas grįžtų;Su pirkėjais elgiamės sąžiningai;„Svarbus kiekvienas“:Su kitu elgiuosi taip, kaip noriu, kad elgtųsi su manimi;Esame atsakingas bendruomenės narys.Išklausome vieni kitus;Dalinamės žiniomis ir patirtimi;Gerbiame kitų darbą ir laiką.„Imu ir padarau“:Esame aktyvūs;Imamės atsakomybės;
      </div>
      <div class="col s4 Normano-h2stilius">
      	<img class="materialboxed norm-pav" src="https://picsum.photos/201/300">
				<h3>Vizija</h3>
         <p>Jei įmonę įsivaizduosime kaip namą, tai vertybės būtų šio namo pamatai. Sunku pastatyti namą be pamatų. Gal ir įmanoma, bet ar toks namas stovės dešimtme­čius? Taip ir įmonė. Jei ji neturi vertybių, jei darbuotojai netiki jomis ir nesivadovau­ja savo kasdieniame darbe, įmonė niekada nepasieks sėkmės.Vertybės yra tai, kas mus sieja, kaip darnią šeimą, kaip vieningą komandą. Po vieną mes tiesiog būtume mes, o visi kartu, tikėdami ir besivadovaudami vienodomis vertybėmis, mes esame MotherLand, įmonė, kuri jau sėkmingai veikia daugiau nei dvi dešimtis metų.</p>
         
      </div>
  </div>

    </div>

    <div class="container papildomai2">

<h2 class="Normano-h2stilius">POPULIARIAUSI PRODUKTAI</h2>

<div class="carousel">

   <?php
  
  include ".git/connection.php";

// Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }





// reikia rasyti FROM ir nurodyti duomenu bazes pavadinima. 4 reiskia, kad bus 4 paveiksleliai
  $sql = "SELECT id, kategorija, pavadinimas, image, kaina FROM prekes ORDER BY kaina DESC";
  $result = mysqli_query($conn, $sql);

// echo $_GET["page"];

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {



      echo '<a class="carousel-item" href="#one!"> 
      <img src=" '. $row["image"]. ' ">
      <p class="karuseles-kaina center-align">'. $row["kaina"]. '</p>
      </a>';

  

    }
  } else {
    echo "0 results";
  }

  mysqli_close($conn);
  ?> 

    
  </div>

<p class="Normano-h2stilius video-atskirimas">Kodėl verta rinktis mus? Žiūrėkite VIDEO: </p>

<div class="video-container">

        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>

<div></div> <!-- kontaktai  -->

<div class="row norm-atstumimas">

      <div class="col s6">
        <h3 class="kontaktai">KONTAKTAI:</h3>
         <p>Adresas: J. Galvydžio g. 3</p>
         <p>Miestas: Vilnius</p>
         <p>Pašto kodas: 08236</p>
         <p>Tel. Nr.: (+370) 11 22 333</p>
         <p>Parašykite mums!</p>
         <a class="waves-effect waves-light btn"><i class="material-icons left">email</i>Rašyti!</a>
         <p>Sekite mus!</p>
         <img class="FB-ikona" width="50px" height="50px" src="https://image.flaticon.com/icons/png/512/33/33702.png">

      </div>
      <div class="col s6 ">
        <iframe class="zemelapis" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.9204911905313!2d25.290882216015824!3d54.711021979317266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b1ed99d41d%3A0x850a41a4a4eb6f63!2sJ.+Galvyd%C5%BEio+g.+3%2C+Vilnius+08236!5e0!3m2!1slt!2slt!4v1557332067987!5m2!1slt!2slt" frameborder="0" allowfullscreen></iframe>
      </div>
      

    </div>
</div>



<!-- footeris -->

<footer class="page-footer f-spalva">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">PRENUMERUOKITE NAUJIENAS</h5>

                <p class="grey-text text-lighten-4">Akcijos, naujovės, naujų produktų pristatymas, konkursai. Viskas šio puslapio tema.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Nuorodos</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="">Swedbank</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">SEB bankas</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Luminor</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Ūkio bankas</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Daugiau nuorodų</a>
            </div>
          </div>
        </footer>






<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>