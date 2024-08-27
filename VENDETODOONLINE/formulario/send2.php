<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if (isset($_POST['send2'])) {
    // Verificación de que todos los campos están completos
    if (
        strlen($_POST['id']) >= 1 &&
        strlen($_POST['nom_emp']) >= 1 &&
        strlen($_POST['ape_emp']) >= 1 &&
        strlen($_POST['dir_emp']) >= 1 &&
        strlen($_POST['tel_emp']) >= 1 &&
        strlen($_POST['rol_emp']) >= 1 &&
        strlen($_POST['correo_emp']) >= 1
    ) {
        $id = trim($_POST['id']);
        $nom_emp = trim($_POST['nom_emp']);
        $ape_emp = trim($_POST['ape_emp']);
        $dir_emp = trim($_POST['dir_emp']);
        $tel_emp = trim($_POST['tel_emp']);
        $rol_emp = trim($_POST['rol_emp']);
        $correo_emp = trim($_POST['correo_emp']);

        // Preparar la consulta SQL
        $consulta = "INSERT INTO empleado(id, nom_emp, ape_emp, dir_emp, tel_emp, rol_emp, correo_emp)
                      VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);

        if ($stmt) {
            // 'sssssss' indica que todos los parámetros son de tipo string
            mysqli_stmt_bind_param($stmt, 'sssssss', $id, $nom_emp, $ape_emp, $dir_emp, $tel_emp, $rol_emp, $correo_emp);
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
