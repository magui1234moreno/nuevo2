<?php
// Verificar si hay un mensaje de confirmación en la URL
$mensaje_exito = isset($_GET['mensaje']) && $_GET['mensaje'] == 'ok';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Íconos Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<style>
  body {
   font-family: Arial, sans-serif;
      background-color: #FFB6C1;
      scroll-behavior: smooth;
  }
</style>
<body>
  
  <?php if ($mensaje_exito): ?>
      <div class="alert alert-success text-center">
            ✅ ¡Tu mensaje fue enviado con éxito! Gracias por contactarnos.
      </div>
  <?php endif; ?>
  
  <form action="/portafolio/PROCESAR/AGREGAR/guardar.php" method="post" class="mx-auto" style="max-width: 600px;">
     
    

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre completo</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>

      <div class="mb-3">
        <label for="correo" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email"  name="email"placeholder="nombre@ejemplo.com" required>
      </div>

      <div class="mb-3">
        <label for="asunto" class="form-label">Asunto</label>
        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Motivo del mensaje">
      </div>

      <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje</label>
        <textarea class="form-control" id="mensaje" rows="4" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-5">Enviar mensaje</button>
      </div>
      
</body>
</html>
   