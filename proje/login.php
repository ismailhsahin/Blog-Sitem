<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/ploginc.css">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/2465e05aae.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&family=Press+Start+2P&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2&display=swap" rel="stylesheet">


	<body>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav container h2">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">ANASAYFA <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="istanbul.html">İSTANBUL</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Mirasımız.html">MİRASIMIZ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Özgeçmiş.html">CV</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="iletişim.html">İLETİŞİM</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="login.php">LOGİN</a>
        </li>

    </ul>
</div>
</nav>



		<?php

		if($_GET["durum"]=="ok"){
			echo " <h1>HOŞ GELDİNİZ İsmail BEY</h1>";
		}
		elseif($_GET["durum"]=="no"){
			echo " <h1>HATALI GİRİŞ</h1>";
		}
		

		?>
		<main>
			<div id="mainalan">
				<div class="login">
					<div class="login-triangle"></div>

					<h2 class="login-header">Log in</h2>

					<form action="sorgulama.php" method="POST" class="login-container">
						<p><input type="email" placeholder="Email" name="mail" autofocus required="required"></p>
						<p><input type="password" placeholder="Password" name="sifre" required="required"></p>
						<p><input type="submit" value="Log in" name="giris"></p>
					</form>
				</div>


			</div>


		</main>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>




	</html>
