
<?php
     if(session_status() !== PHP_SESSION_ACTIVE) session_start();
   

if (!isset($_SESSION['AUTENTICADO'])) {
    // Guardar la URL actual en la variable de sesión
    $_SESSION['redirect_back'] = $_SERVER['REQUEST_URI'];
    
    echo '<script>alert("POR FAVOR INICIE SESION")</script>';
    echo "<script>location.href='../client-site/page-login.html'</script>";
    exit;
}

if ($_SESSION['rol'] != "Residente") {
    echo '<script>alert("NO POSEE PERMISOS PARA ACCEDER A ESTA INTERFAZ");</script>';
    echo "<script>history.back();</script>";
    exit;
}


?>