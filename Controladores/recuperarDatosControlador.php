<?php
	if (!isset($_POST['email'])) {
		require_once '../Vistas/recuperarapodovista.php';
	} elseif (isset($_POST['email'])) {
		echo 'Mensaje enviado.';
	}
?>