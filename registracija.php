<?php
    require ('baza.php');
    // require('nav.php');
	session_start();
?>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">

<div class="container">
	<h2>Registracija</h2>
	<form action="registracijaPost.php" method="post">
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" class="form-control" id="usr" name="email"/>
		</div>
		<div class="form-group">
			<label for="sifra">Sifra:</label>
			<input type="password" class="form-control" id="pwd" name="sifra"/>
		</div>
		<button class="btn btn-info">Registracija</button>
		<a href="index.php">Naslovna</a>
	</form>
</div>

<?php require('footer.php')?>
