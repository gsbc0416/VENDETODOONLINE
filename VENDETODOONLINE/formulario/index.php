<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stili.css">
</head>
<body>

  <form method="post"autocomplete="off">
        <h2>Registro de Producto</h2>
     
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="id_prod" placeholder="1" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="text" name="nom_prod" placeholder="2" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="text" name="descr_prod" placeholder="3">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="text" name="id_prov" placeholder="4">
                <i class="fa-solid fa-user"></i>
            </div>
            <input type="submit" name="send" class="btn" value="enviar">

        </div>
  </form>

  <?php
        include("send.php");
  ?>
</body>
</html>