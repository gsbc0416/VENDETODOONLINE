<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if (isset($_POST['sendprod'])) {
    // Verificación de que todos los campos están completos
    if (
        strlen($_POST['id_prod']) >= 1 &&
        strlen($_POST['nom_prod']) >= 1 &&
        strlen($_POST['descr_prod']) >= 1 &&
        strlen($_POST['id_prov']) >= 1 
        
    ) {
        $id_prod = trim($_POST['id_prod']);
        $nom_prod = trim($_POST['nom_prod']);
        $descr_prod = trim($_POST['descr_prod']);
        $id_prov = trim($_POST['id_prov']);
       
        // Preparar la consulta SQL
        $consulta = "INSERT INTO producto(id_prod, nom_prod, descr_prod, id_prov)
                      VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);

        if ($stmt) {
            // 'sssssss' indica que todos los parámetros son de tipo string
            mysqli_stmt_bind_param($stmt, 'ssss', $id_prod, $nom_prod, $descr_prod, $id_prov);
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
