<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Provvedores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stili.css">
</head>
<body>

  <form method="post"autocomplete="off">
        <h2>Registro del Proveedor</h2>
     
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="id" placeholder="NIT/Cedula del Proveedor" required>
                
            </div>
            <div class="input-container">
                <input type="text" name="nom_prov" placeholder="Nombre del Proveedor" required>
                
            </div>
            <div class="input-container">
                <input type="text" name="dir_prov" placeholder="Dirreccion del Proveedor">
                
            </div>
            <div class="input-container">
                <input type="text" name="tel_prov" placeholder="Cleular">
               
            </div>
            <div class="input-container">
                <input type="text" name="correo_prov" placeholder="Correo del Proveedor">
                                
               
            </div>
            <input type="submit" name="sendprov" class="btn" value="Enviar">
            <a href="http://localhost/vendetodoonline/pagp.html" class="btn">Volver</a>

        </div>
  </form>

  <?php
        include("sendprov.php");
  ?>
</body>
</html>