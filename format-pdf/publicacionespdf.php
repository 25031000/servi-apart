
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/plantilla-pdf.css">
    <title>Reporte de Publicaciones</title>

    <!-- icono -->
    <link rel="shortcut icon" href="../assets/icons/ico.ico">
</head>

<body>
  <header style="border-bottom: 2px solid green; padding: 20px 0px; font-size: 2rem;">
    Servi - Apart
  </header>
    <h1">Reporte publicaciones</h1>
    <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
  <thead>
    <tr>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">#</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Titulo</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Descripcion</th>
      
  </thead>
  <tbody>
    <?php 
    
    require_once "../Models/conexion.php";
    require_once "../Models/consultas.php";
    require_once "../Controllers/mostrarInfoAdmin.php";
    cargarPublicacionesPDF() ?>
  </tbody>
</table>

</body>

</html>