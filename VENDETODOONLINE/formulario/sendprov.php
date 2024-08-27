
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if (isset($_POST['sendprov'])) {
    // Verificación de que todos los campos están completos
    if (
        strlen($_POST['id']) >= 1 &&
        strlen($_POST['nom_prov']) >= 1 &&
        strlen($_POST['dir_prov']) >= 1 &&
        strlen($_POST['tel_prov']) >= 1 &&
        strlen($_POST['correo_prov']) >= 1 
        
    ) {
        $id = trim($_POST['id']);
        $nom_prov = trim($_POST['nom_prov']);
        $dir_prov = trim($_POST['dir_prov']);
        $tel_prov = trim($_POST['tel_prov']);
        $correo_prov = trim($_POST['correo_prov']);
       
        // Preparar la consulta SQL
        $consulta = "INSERT INTO proveedor(id, nom_prov, dir_prov, tel_prov, correo_prov)
                      VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);

        if ($stmt) {
            // 'sssss' indica que todos los parámetros son de tipo string
            mysqli_stmt_bind_param($stmt, 'sssss', $id, $nom_prov, $dir_prov, $tel_prov, $correo_prov);
            $resultado = mysqli_stmt_execute($stmt);

            if ($resultado) {
                ?>
                <h3 class="success">Tu registro fue exitoso</h3>
                <?php
            } else {
                ?>
                <h3 class="error">Ocurrió un error: <?php echo mysqli_stmt_error($stmt); ?></h3>
                <?php
            }

            // Cerrar la sentencia
            mysqli_stmt_close($stmt);
        } else {
            ?>
            <h3 class="error">Error en la preparación de la consulta: <?php echo mysqli_error($conex); ?></h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}

// Cerrar la conexión
mysqli_close($conex);

?>
