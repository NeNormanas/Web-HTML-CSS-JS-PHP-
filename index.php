<!DOCTYPE html>
<html>
<head>

	<title>MotherLand</title>
  <meta charset="utf-8">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


  <!-- ...... -->

</head>
<body>


<div class="navbar-fixed">

    <nav class="purple">
     <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">MotherLand</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
         <li><a class="text-v" href="about.php">Apie</a></li>
         <li><a class="text-v" href="badges.html">Naujienos</a></li>
         <li><a class="text-v" href="product.php">Prekes</a></li>
         <li><a class="text-v" href="mobile.html">Registruotis</a></li>
       </ul>
     </div>
   </div>
 </nav>

</div>

<ul class="sidenav" id="mobile-demo">
  <li><a href="about.php">Apie</a></li>
  <li><a href="badges.html">Naujienos</a></li>
  <li><a href="product.php">Prekes</a></li>
  <li><a href="mobile.html">Registruotis</a></li>
</ul>

<div class="container namo-heading">
  <div class="parallax-container valign-wrapper ">

    
    
     <div class="parallax hoverable flow-text">
      <img src="images/zeme1.jpg" alt="" class="circle responsive-img"></div>
      <!-- <img src="https://picsum.photos/210/200" alt="" class="circle responsive-img"></div> -->
    </div>


  </div>

  <div class="container">
    <h1 class="red lighten-2 indigo-text text-darken-2 center-align">Megstamiausia</h1>

    <ul class="pagination center-align">
      <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
      <li class="active"><a href="index.php?page=1">1</a></li>
      <li class="waves-effect"><a href="index.php?page=2">2</a></li>
      <li class="waves-effect"><a href="index.php?page=3">3</a></li>
   <!--  <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li> -->
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>

  <p class=" center-align indigo-text card-panel hoverable flow-text">  Issirinkite kategorija </p>
</div>

<div class="container">
 <div class="row prekes-sarasas">


  <?php
  
  include ".git/connection.php";

// Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// Change character set to utf8. SQl lietuviska kalba
  mysqli_set_charset($conn,"utf8");

// formule puslapiavimui
  if (isset($_GET["page"])) {
    $skip = ($_GET["page"] - 1) * 4;
  }
  else {
    $skip = 0;
  }

// reikia rasyti FROM ir nurodyti duomenu bazes pavadinima. 4 reiskia, kad bus 4 paveiksleliai
  $sql = "SELECT id, kategorija, pavadinimas, image, kaina FROM prekes LIMIT 4 OFFSET $skip";
  $result = mysqli_query($conn, $sql);

// echo $_GET["page"];

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {



      echo '<div class="col s12 m6 l3">';

      echo '<div class="prekes-wrapper purple lighten-1 center-align">';
      echo '<img class="responsive-img materialboxed prekes-pav" src=" '. $row["image"]. ' ">';
      echo '<h3 class="center-align text-mano">' . $row["kategorija"]. ' </h3>';
      echo '<h4 class="center-align text-mano">' . $row["pavadinimas"]. ' </h4>';
      echo '<h5 class="center-align text-mano">' . $row["kaina"]. ' eur </h5>';
      echo '<p></p>';
      echo '<a class="waves-effect waves-light btn blue" ><i class="tiny material-icons left">add_shopping_cart</i>i krepseli</a>';

      echo '</div>';
      echo '</div>';

// issivesti kaip teksta puslapyje kaip pavyzdi.
        // echo " " . $row["kategorija"]. "" . $row["pavadinimas"]. "Kaina:" . $row["kaina" ]."eur <br>";


    }
  } else {
    echo "0 results";
  }

  mysqli_close($conn);
  ?>



         <!-- <div class="col s12 m6 l3">

            <div class="prekes-wrapper purple lighten-1 center-align">
                <img class="responsive-img materialboxed prekes-pav" src="https://picsum.photos/205/200">
                <h3 class="center-align ">Maistas</h3>
                <p></p>
                <a class="waves-effect waves-light btn blue" ><i class="tiny material-icons left">add_shopping_cart</i>i krepseli</a>

            </div>
         </div>


         <div class="col s12 m6 l3">
         <div class="prekes-wrapper purple lighten-2 center-align">
              <img class="responsive-img materialboxed prekes-pav" src="https://picsum.photos/201/200">
               <h3 class="center-align">Buit prekes</h3>
              <p></p>
               <a class="waves-effect waves-light btn blue" ><i class="tiny material-icons left">add_shopping_cart</i> i krepseli</a>
          </div>
       </div>
          

          <div class="col s12 m6 l3">
            <div class="prekes-wrapper purple lighten-3 center-align">           
            <img class="responsive-img materialboxed prekes-pav" src="https://picsum.photos/202/200">
            <h3 class="center-align">Zaislai</h3>
              <p></p>
              <a class="waves-effect waves-light btn blue" ><i class="tiny material-icons left">add_shopping_cart</i>i krepseli</a>
           </div>
         </div> -->

         <!-- 
          <div class="col s12 m6 l3">
           <div class="prekes-wrapper purple lighten-4 center-align">  
            <img class="responsive-img materialboxed prekes-pav" src="https://picsum.photos/203/200">
            <h3 class="center-align">huyhuyh </h3>
             <p></p>
             <a class="waves-effect waves-light btn blue materialboxed" ><i class="tiny material-icons left">add_shopping_cart</i>i krepseli</a>
           </div>
         </div> -->

       </div>



       <nav class="purple lighten-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Apmokejimas</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a class="text-v" href="sass.html">Swedbank</a></li>
              <li><a class="text-v" href="badges.html">Seb bankas</a></li>
              <li><a class="text-v" href="collapsible.html">Luminor</a></li>
              <li><a class="text-v" href="mobile.html">Grynais</a></li>
            </ul>
          </div>
        </div>
      </nav>





    </div>




<!-- ........
-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>