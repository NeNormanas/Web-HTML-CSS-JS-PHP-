<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<div class="navbar-fixed">

  <nav class="purple">
  	<div class="container">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">MotherLand</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      	<li><a href="about.php">Apie</a></li>
        <li><a href="about.php">Naujienos</a></li>
        <li><a href="product.php">Prekes</a></li>
        <li><a href="product.php">Registruotis</a></li>
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




	<!-- ============================== -->

<div class="container">

<div class="parallax-container valign-wrapper virsus-parallax">

	<h1 class="brand-logo center-align parallax-antraste red-text">MotherLand</h1>

	<div class="parallax">
		<img class="responsive-img" width="8000" src="images/virgis/virgis0.jpg">
	</div>
</div>   

<!-- Prisijungimas prie DB -->

<?php
  
  include ".git/connection.php";

// Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  ?>

<!-- ==============================PADIDINIMAS -->

<?php

// reikia rasyti FROM ir nurodyti duomenu bazes pavadinima. 4 reiskia, kad bus 4 paveiksleliai
// surusiuoja ORDER BY nuo maziuosio ir paima pirmaji LIMIT 1 elementa
  $sql = "SELECT id, kategorija, pavadinimas, image, image1, image2, image3, kaina FROM prekes ORDER BY kaina LIMIT 1";
  $result = mysqli_query($conn, $sql);

// echo $_GET["page"];

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    		echo '<div class="my-flex row">';
				echo '<div class="col s6 m6 l6 red-virgis center-align">';
					echo '<h3 class="virgis-font center-align parallax-antraste blue-text">Pigiausias pasirinkimas</h3>';
					echo '<img class="responsive-img" width="700" src="'.$row["image"].'">';
				echo '</div>';

				echo '<div class="col s6 m6 l6 green-virgis center-align">';
					echo '<h3 class="virgis-font yellow-virgis-text">Pavadinimas</h3>';
					echo '<p>'.$row["pavadinimas"].'</p>';
					
					echo '<div class="my-flex row">';
						echo '<div class="col s6 m3 l3 green-virgis center-align">';
							echo '<img class="responsive-img materialboxed" src="'.$row["image"].'">';
						echo '</div>';

						echo '<div class="col s3 m3 l3 green-virgis center-align">';
							echo '<img class="responsive-img materialboxed" src="'.$row["image1"].'">';
						echo '</div>';

						echo '<div class="col s3 m3 l3 green-virgis center-align">';
							echo '<img class="responsive-img materialboxed" src="'.$row["image2"].'">';
						echo '</div>';

						echo '<div class="col s3 m3 l3 green-virgis center-align">';
							echo '<img class="responsive-img materialboxed" src="'.$row["image3"].'">';
						echo '</div>';
					echo '</div>';
					echo '<p>'.$row["kaina"].'- Eur</p>';
					echo '<a class="waves-effect waves-light btn">Pasirinkti</a>';

				echo '</div>';
			echo '</div>';


    }
  } else {
    echo "0 results";
  }

  
?>


<!-- ============================ -->

<div class="parallax-container valign-wrapper virsus-parallax">

	<h1 class="brand-logo center-align parallax-antraste red-text">MotherLand</h1>

	<div class="parallax">
		<img class="responsive-img" width="8000" src="images/virgis/trakai.jpeg">
	</div>
</div> 

<!-- ==============================PASPAUDIMAS -->

<?php

// reikia rasyti FROM ir nurodyti duomenu bazes pavadinima. 4 reiskia, kad bus 4 paveiksleliai
// surusiuoja nuo didziausio ORDER BY DESC ir paima pirmaji LIMIT 1 elementa
  $sql = "SELECT id, kategorija, pavadinimas, image, image1, image2, image3, kaina FROM prekes ORDER BY kaina DESC LIMIT 1";
  $result = mysqli_query($conn, $sql);

// echo $_GET["page"];

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

				echo '<div class="my-flex row">';
					echo '<div class="col s6 m6 l6 yellow-virgis center-align">';
						echo '<h3 class="virgis-font center-align parallax-antraste blue-text">Brangiauisias pasirinkimas</h3>';
						echo '<img class="virgis-font perkelti-image responsive-img" width="700" src="'.$row["image"].'">';
					echo '</div>';

					echo '<div class="col s6 m6 l6 blue-virgis center-align">';
						echo '<h3 class="virgis-font yellow-text">Aprašymas</h3>';
						echo '<p>'.$row["pavadinimas"].'</p>';
						
						echo '<div class="my-flex row">';
							echo '<div class="col s6 m3 l3 blue-virgis center-align">';
								echo '<img class="keitimas-images responsive-img" src="'.$row["image"].'">';
							echo '</div>';

							echo '<div class="col s3 m3 l3 blue-virgis center-align">';
								echo '<img class="keitimas-images responsive-img" src="'.$row["image1"].'">';
							echo '</div>';

							echo '<div class="col s3 m3 l3 blue-virgis center-align">';
								echo '<img class="keitimas-images responsive-img" src="'.$row["image2"].'">';
							echo '</div>';

							echo '<div class="col s3 m3 l3 blue-virgis center-align">';
								echo '<img class="keitimas-images responsive-img" src="'.$row["image3"].'">';
							echo '</div>';
						echo '</div>';
						echo '<p>'.$row["kaina"].'- Eur</p>';
						echo '<a class="waves-effect waves-light btn">Pasirinkti</a>';
					echo '</div>';
				echo '</div>';
    }
  } else {
    echo "0 results";
  }

?>

<!-- ============================ -->

<div class="parallax-container valign-wrapper virsus-parallax">

	<h1 class="brand-logo center-align parallax-antraste red-text">MotherLand</h1>

	<div class="parallax">
		<img class="responsive-img" width="8000" src="images/virgis/trakai1.jpg">
	</div>
</div> 

<!-- ================================= UZVEDIMAS-->

<?php

// reikia rasyti FROM ir nurodyti duomenu bazes pavadinima. 4 reiskia, kad bus 4 paveiksleliai
// surusiuoja ORDER BY nuo maziuosio ir paima pirmaji LIMIT 1 elementa
  $sql = "SELECT id, kategorija, pavadinimas, image, image1, image2, image3, kaina FROM prekes ORDER BY kaina LIMIT 1";
  $result = mysqli_query($conn, $sql);

// echo $_GET["page"];

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

			echo '<div class="my-flex row">';
				echo '<div class="col s6 m6 l6 red-virgis center-align">';
					echo '<h3 class="virgis-font center-align parallax-antraste blue-text">N A U J I E N A</h3>';
					echo '<img class="mouse-image responsive-img" width="700" src="'.$row["image"].'">';

				echo '</div>';

				echo '<div class="col s6 m6 l6 green-virgis center-align">';
					echo '<h3 class="virgis-font red-text">Aprašymas</h3>';
					echo '<p>'.$row["pavadinimas"].'</p>';
					
					echo '<div class="my-flex row">';
						echo '<div class="col s6 m3 l3 green-virgis center-align">';
							echo '<img class="uzvedimas-image responsive-img" src="images/virgis/virgis9.jpg">';
						echo '</div>';

						echo '<div class="col s3 m3 l3 green-virgis center-align">';
							echo '<img class="uzvedimas-image responsive-img" src="images/virgis/virgis10.jpg">';
						echo '</div>';

						echo '<div class="col s3 m3 l3 green-virgis center-align">';
							echo '<img class="uzvedimas-image responsive-img" src="images/virgis/virgis11.jpg">';
						echo '</div>';

						echo '<div class="col s3 m3 l3 green-virgis center-align">';
							echo '<img class="uzvedimas-image responsive-img" src="images/virgis/virgis12.jpg">';
						echo '</div>';
					echo '</div>';
					echo '<p>'.$row["kaina"].'- Eur</p>';
					echo '<a class="waves-effect waves-light btn">Pasirinkti</a>';

				echo '</div>';
			echo '</div>';

}
  } else {
    echo "0 results";
  }

?>

<!-- ================================= -->

<div class="parallax-container valign-wrapper virsus-parallax">

	<h1 class="brand-logo center-align parallax-antraste red-text">MotherLand</h1>

	<div class="parallax">
		<img class="responsive-img" width="8000" src="images/virgis/jachta.jpg">
	</div>
</div> 


<!-- ==============================DVIGUBAS PASPAUDIMAS -->

<div class="my-flex row">
	<div class="col s6 m6 l6 yellow-virgis center-align">
		<h3 class="virgis-font center-align parallax-antraste blue-text">Greitai turėsime</h3>
		<img class="perkelti-dbl-image responsive-img" width="700" src="images/virgis/virgis13.jpg">
	</div>

	<div class="col s6 m6 l6 blue-virgis center-align">
		<h3 class="virgis-font yellow-text">Aprašymas</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		t.</p>
		
		<div class="my-flex row">
			<div class="col s6 m3 l3 blue-virgis center-align">
				<img class="keitimas-dbl-images responsive-img" src="images/virgis/virgis13.jpg">
			</div>

			<div class="col s3 m3 l3 blue-virgis center-align">
				<img class="keitimas-dbl-images responsive-img" src="images/virgis/virgis14.jpg">
			</div>

			<div class="col s3 m3 l3 blue-virgis center-align">
				<img class="keitimas-dbl-images responsive-img" src="images/virgis/virgis15.jpg">
			</div>

			<div class="col s3 m3 l3 blue-virgis center-align">
				<img class="keitimas-dbl-images responsive-img" src="images/virgis/virgis16.jpg">
			</div>
		</div>
		<a class="waves-effect waves-light btn">Pasirinkti</a>

	</div>
</div>


</div>

<?php
mysqli_close($conn);
  ?>

<!-- ============================== -->

<nav class="purple lighten-4">
	<div class="container">
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo">Apmokejimas</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="sass.html">Swedbank</a></li>
				<li><a href="badges.html">Seb bankas</a></li>
				<li><a href="collapsible.html">Luminor</a></li>
				<li><a href="mobile.html">Grynais</a></li>
			</ul>
		</div>
	</div>
</nav>




<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript" src="scripts/script.js"></script>

</body>
</html>