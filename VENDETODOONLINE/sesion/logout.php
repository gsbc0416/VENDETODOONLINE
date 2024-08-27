<?php
	session_start();
	session_destroy();
	header('location:index.php');#al darle salir me llevara a la pagina
?>