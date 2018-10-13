<?php
	include 'connection.php';



  $saaja=$_POST['saaja'];
	$viite=$_POST['viite'];



	$sql=$db->prepare("INSERT INTO tilitapahtumat (saaja,viite) VALUES(:a_saaja,:a_viite)");
	$sql->bindParam(':a_saaja',$saaja);
	$sql->bindParam(':a_viite',$viite);
	$sql->execute();
	http_response_code(201);
?>
