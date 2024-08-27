<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if (isset($_POST['sendventa'])) {
    // Verificación de que todos los campos están completos
    if (
        strlen($_POST['id']) >= 1 &&
        strlen($_POST['num_venta']) >= 1 &&
        strlen($_POST['descr_ven']) >= 1 &&
        strlen($_POST['id_emp']) >= 1 &&
        strlen($_POST['fecha_ven']) >= 1 &&
        strlen($_POST['id_usu']) >= 1 
        
    ) {
        $id = trim($_POST['id']);
        $num_venta = trim($_POST['num_venta']);
        $descr_ven = trim($_POST['descr_ven']);
        $id_emp = trim($_POST['id_emp']);
        $fecha_ven = trim($_POST['fecha_ven']);
        $id_usu = trim($_POST['id_usu']);
        

        // Preparar la consulta SQL
        $consulta = "INSERT INTO venta(id, num_venta, descr_ven, id_emp, fecha_ven, id_usu)
                      VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);

        if ($stmt) {
            // 'sssssss' indica que todos los parámetros son de tipo string
            mysqli_stmt_bind_param($stmt, 'ssssss', $id, $num_venta, $descr_ven, $id_emp, $fecha_ven, $id_usu);
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
