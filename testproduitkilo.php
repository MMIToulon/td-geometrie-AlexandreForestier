
<?php

	ini_set('display_errors','1');	

	require_once("source/ProduitKilo.php");
	
	$c = new ProduitKilo();
	
	echo $c;

	$prix = $c->calculPrix();	
	
	echo "<br> Le prix du produit en euros est donc de : ".$prix;
	
	echo "<br> Le nombre de produit créé est de : ".Produit::$compteur;
	
?>