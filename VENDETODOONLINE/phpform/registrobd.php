<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["id_producto"]) or empty($_POST["nombre_producto"]) or empty($_POST["descripcion_producto"]) or empty($_POST["id_proveedor"])) {
        echo '<div class="alert">uno de los campos esta vacio</div>';
    } else {
        $id_producto=$_POST[id_prod];
        $nombre_producto=$_POSTnombre_prod];
        $descripcion_producto=$_POST[descripcion_prod];
        $id_proveedor=$_POST[id_prov];
        $conn = mysqli->query(" insert into producto (id_producto, nombre_producto, descripcion_producto, id_proveedor)values('$nombre','$apellido','$usuario','$clave')"):  
       if ($conn=1) {
        echo '<div class="success">usuario registrado correctamente</div>';
       }else {
        echo '<div class="alerta">error al registrarse</div>';
        }
    }

}
?>