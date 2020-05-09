<?php


	$kadi="g181210166@gmail.com";

	$sifre="123";

	if ($_POST["mail"]==$kadi and $_POST["sifre"]==$sifre) {
		header("location:login.php?durum=ok");	
	}
	else{
		header("location:login.php?durum=no");
	}
?>


