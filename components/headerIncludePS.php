<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <style>
    @keyframes wipe-in-down {
      from {
        clip-path: inset(0 0 100% 0);
      }

      to {
        clip-path: inset(0 0 0 0);
      }
    }

    [transition-style="in:wipe:down"] {
      animation: 1.5s cubic-bezier(.25, 1, .30, 1) wipe-in-down both;
    }

    @keyframes wipe-out-down {
      from {
        clip-path: inset(0 0 0 0);
      }

      to {
        clip-path: inset(100% 0 0 0);
      }
    }

    [transition-style="out:wipe:down"] {
      animation: 1.5s cubic-bezier(.25, 1, .30, 1) wipe-out-down both;
    }
  </style>
</head>
<?php

require_once "../../Models/seguridadPS.php";
require_once "../../Models/conexion.php";
require_once "../../Models/consultas.php";
$user_id = $_SESSION['id'];

$objetoConsulta = new Consultas();
$userInfo = $objetoConsulta->mostrarUsuarioEditarAdmin($user_id)[0];

?>

<body>
  <header class="py-4 px-3 px-md-5  w-100 d-flex align-items-center justify-content-between">
    <div>
      <img id="menu-btn" width="24" height="24" role="button" src="icons/Menu.png" alt="">
    </div>
    <div class="d-flex ">
      <?php
      if (!$userInfo['foto']) {
      ?>
        <div style="width: 42px; height: 42px" class="rounded-5 ml-5 bg bg-primary d-flex align-items-center justify-content-center text-white"><?php echo $userInfo['nombres'][0] ?></div>
      <?php
      } else {
      ?>
        <img width="42" height="42" class="rounded-5 ml-3 ml-5" src="../<?php echo $userInfo['foto'] ?>" alt="">
      <?php
      }
      ?>
      <button class="px-4 py-2 rounded-2 bg-none text-black perfil-btn ms-3 border-none"><a style="text-decoration: none;" class="text-black" href="../Seguridad/perfil.php">Perfil</a></button>

      <a href="../../Controllers/cerrarSesion.php">
        <button class="px-4 py-2 rounded-2 bg-none text-black perfil-btn ms-3 border-none">Cerrar Sesión</button>
      </a>

    </div>
  </header>

  <script src="../Dashboard/js/lib/jquery.min.js"></script>

  <script>
    $('#menu-btn').click(() => {

      $('#menu-modal').attr('transition-style', 'in:wipe:down')
      $('#menu-modal').css({
        display: 'block'
      })
      $('body').css({
        overflowY: "hidden"
      })
    })

    //close icon on modal
    $('#close').click(() => {

      $('#menu-modal').attr('transition-style', 'out:wipe:down')
      setTimeout(() => {
        $('body').css({
          overflowY: "scroll"
        })
      }, 1200);


    })
  </script>
</body>

</html>