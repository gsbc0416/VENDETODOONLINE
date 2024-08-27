<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Ventas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stili.css">
</head>
<body>

  <form method="post"autocomplete="off">
        <h2>Registro de Venta</h2>
     
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="id" placeholder="id de la venta" required>
                
            </div>
            <div class="input-container">
                <input type="text" name="num_venta" placeholder="Numero de la venta" required>
                
            </div>
            <div class="input-container">
                <input type="text" name="descr_ven" placeholder="descripcion de la venta">
                
            </div>
            <div class="input-container">
                <input type="text" name="id_emp" placeholder="cedula del empleado ">
               
            </div>
            <div class="input-container">
                <input type="text" name="fecha_ven" placeholder="fecha de la venta">
               
            </div>
            <div class="input-container">
                <input type="text" name="id_usu" placeholder="cedula del usuario">
               
           
            <input type="submit" name="sendventa" class="btn" value="Enviar">
            <a href="http://localhost/vendetodoonline/pagp.html" class="btn">Volver</a>

        </div>
  </form>

  <?php
        include("sendventa.php");
  ?>
</body>
</html>