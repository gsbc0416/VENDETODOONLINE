<?php

    inlcude("../VENDETODOONLINE\phpform\conex.php")

if(isset($_POST['send'])) {

    if(
        strlen($POST['id_prod']) >= 1 &&
        strlen($POST['nom_prod']) >= 1 &&
        strlen($POST['descr_prod'])>= 1 &&
        strlen($POST['id_prov']) >= 1
    ) {
        $id_prod = trim($POST['id_prod']);
        $nom_prod = trim($POST['nom_prod']);
        $descr_prod = trim($POST['descr_prod']);
        $id_prov = trim($POST['id_prov']);
        $consulta = "INSERT INTO producto(id_prod, nom_prod, descr_prod, id_prov) VALUES ('$id_prod', '$nom_prod', '$descr_prod', '$id_prov')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado) {
            ?>
                <h3 class="success"> Tu resgisto fue exitoso</h3
            <?php
        } else {
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
        }

    } else {
        ?>
        <h3 class="error"> llena todos los campos</h3>
        <?php
    }
}    

?>