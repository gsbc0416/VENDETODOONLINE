<?php

include("conexion.php");


if (isset($_POST['send'])) {
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

        $consulta = "INSERT INTO producto (id_prod, nom_prod, descr_prod, id_prov) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);
            # la cantidad de s en parametros deben ser las mismas que tiene la base de datos
        if ($stmt) {
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

   
?>