<?php
	include 'connection.php';

  $saaja=$_POST['saaja'];
	$viite=$_POST['viite'];
  $viesti=$_POST['viesti'];
  $maara=$_POST['maara'];
  $pvm=$_POST['pvm'];

	$sql=$db->prepare("INSERT INTO tilitapahtumat (saaja,viite,viesti,maara,pvm) VALUES(:a_saaja,:a_viite,:a_viesti,:a_maara,:a_pvm)");
  $sql->bindParam(':a_saaja',$saaja);
	$sql->bindParam(':a_viite',$viite);
  $sql->bindParam(':a_viesti',$viesti);
  $sql->bindParam(':a_maara',$maara);
  $sql->bindParam(':a_pvm',$pvm);

	$sql->execute();

	http_response_code(201);
?>
