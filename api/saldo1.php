<?php
	require "connection.php";
	$sql = "SELECT * FROM Tili where idTili = 1";

	$resultObject = $db->query($sql);

	$resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($resultArray);
?>
