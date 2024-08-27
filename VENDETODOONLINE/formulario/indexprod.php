<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stili.css">
</head>
<body>

  <form method="post"autocomplete="off">
        <h2>Registro de Producto</h2>
     
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="id_prod" placeholder="id del producto" required>
                
            </div>
            <div class="input-container">
                <input type="text" name="nom_prod" placeholder="Nombre del producto" required>
                
            </div>
            <div class="input-container">
                <input type="text" name="descr_prod" placeholder="descripcion del producto">
                
            </div>
            <div class="input-container">
                <input type="text" name="id_prov" placeholder="NIT/C.C del proveedor ">
               
            
            <input type="submit" name="sendprod" class="btn" value="Enviar">
            <a href="http://localhost/vendetodoonline/pagp.html" class="btn">Volver</a>

        </div>
  </form>

  <?php
        include("sendprod.php");
  ?>
</body>
</html>