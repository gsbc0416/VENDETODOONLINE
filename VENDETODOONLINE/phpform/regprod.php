<?php
// Datos de la base de datos
$servername = "localhost";
$username = "root";
$password = "0826";
$dbname = "vendetodoonline";

// Crear la conexión
$conex = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}

// Preparar y vincular la consulta
$stmt = $conex->prepare("INSERT INTO producto id_prod, nom_prod, descr_prod, id_prov) VALUES (?, ?, ?, ?)");

// Verificar si la preparación fue exitosa
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conex->error);
}

// Vincular parámetros (tipos: 's' para string)
$stmt->bind_param('ssss', $id_prod, $nom_prod, $descr_prod, $id_prov);

// Establecer parámetros y ejecutar


if ($stmt->execute()) {
    echo "Registro guardado exitosamente";
} else {
    echo "Error al guardar el registro: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conex->close();
?>




<?php
// hacemos prueba si podemos tener dos datos php 2 en 1 y q funcione
	include('conexvende.php');
	if(isset($_POST['susername'])){
		$id_prod=$_POST['id_prod'];
		$nom_prod=$_POST['nom_prod'];
        $descr_prod=$_POST['descr_prod'];
		$id_prov=$_POST['id_prov'];

		$query=$conn->query("select * from user where username='$username'");

		if ($query->num_rows>0){
			?>
  				<span>El Usuario que ingreso ya existe.</span>
  			<?php 
		}

		elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$username)){
			?>
  				<span style="font-size:11px;">Invalid username. Space & Special Characters not allowed.</span>
  			<?php 
		}
		elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$password)){
			?>
  				<span style="font-size:11px;">Invalid password. Space & Special Characters not allowed.</span>
  			<?php 
		}
		else{
			$mpassword=md5($password);
			$conn->query("insert into user (username, password) values ('$username', '$mpassword')");
			?>
  				<span>Registro Exitoso.</span>
  			<?php 
		}
	}
?>
