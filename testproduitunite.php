<?php

	ini_set('display_errors','1');
	
	require_once("source/ProduitUnite.php");

	$d = new ProduitUnite();
	echo $d;

	$prix = $d->calculPrix();	
	echo "<br> Le prix du produit en euros est donc de : ".$prix;
	echo "<br> Le nombre de produit créé est de : ".Produit::$compteur;
?>