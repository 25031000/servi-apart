<?php

header("content-Type: application/xls");
header("content-Disposition: attachment; filename=reporte_publicaciones.xls");

?>

<table class="table table-hover ">
<thead>
        <tr class="d-flex row border rounded-top rounded-3">
            <th class="d-flex col-md-2">
                <span class="ms-2">id_publi</span>
            </th>
            <th class="d-flex col-md-2">
            
                <span class="ms-2">Titulo</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Descripcion</span>
            </th>
            
        
        </tr>
    </thead>
    <tbody>
        <?php

            require_once "../Models/conexion.php";
            require_once "../Models/consultas.php";
            require_once "../Controllers/mostrarInfoAdmin.php";
            cargarPublicacionesPDF();

        ?>
    </tbody>
</table>