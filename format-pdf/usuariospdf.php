
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/plantilla-pdf.css">
    <title>Reporte de Usuarios</title>

    <!-- icono -->
    <link rel="shortcut icon" href="../assets/icons/ico.ico">
</head>

<body>
  <header style="border-bottom: 2px solid green; padding: 20px 0px; font-size: 2rem;">
    Servi - Apart
  </header>
    <h1">Reporte Usuarios</h1>
    <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
  <thead>
    <tr>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Identificacion</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Tipo Documento</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Nombres</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Apellidos</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Correo</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Telefono</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Rol</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Estado</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Torre</th>
      <th style="background-color: #f2f2f2; text-align: left; padding: 8px; border-top: 1px solid #dee2e6; border-bottom: 2px solid #dee2e6; font-weight: bold;">Apartamento</th>
      
  </thead>
  <tbody>
    <?php 
    
    require_once "../Models/conexion.php";
    require_once "../Models/consultas.php";
    require_once "../Controllers/mostrarInfoAdmin.php";
    cargarUsuariosPDF() ?>
  </tbody>
</table>

</body>

</html>