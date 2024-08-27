<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Empleado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stili.css">
</head>
<body>

  <form method="post"autocomplete="off">
        <h2>Registro de empleado</h2>
     
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="id" placeholder="N° de Cedula Empleado" required>
                
            </div>
            <div class="input-container">
                <input type="text" name="nom_emp" placeholder="Nombres" required>
                
            </div>
            <div class="input-container">
                <input type="text" name="ape_emp" placeholder="Apellidos">
                
            </div>
            <div class="input-container">
                <input type="text" name="dir_emp" placeholder="Direccion ">
               
            </div>
            <div class="input-container">
                <input type="text" name="tel_emp" placeholder="Celular">
               
            </div>
            <div class="input-container">
                <input type="text" name="rol_emp" placeholder="Cargo">
               
            </div>
            <div class="input-container">
                <input type="text" name="correo_emp" placeholder="Correo">
                
            </div>
            <input type="submit" name="send2" class="btn" value="Enviar">
            <a href="http://localhost/vendetodoonline/pagp.html" class="btn">Volver</a>

        </div>
  </form>

  <?php
        include("send2.php");
  ?>
</body>
</html>