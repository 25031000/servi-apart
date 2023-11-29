<?php

header("content-Type: application/vnd.ms-excel; charset=UTF-8");
header("content-Disposition: attachment; filename=reporte_novedades.xls");
echo "\xEF\xBB\xBF"; 

?>

<table class="table table-hover ">
<thead>
        <tr class="d-flex row border rounded-top rounded-3">
            <th class="d-flex col-md-2">
                <span class="ms-2">ID Novedad</span>
            </th>
            <th class="d-flex col-md-2">
            
                <span class="ms-2">Placa</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Novedad</span>
            </th>
            <th class="d-flex col-md-2">
            
                <span class="ms-2">Identificacion del Personal Encargado</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Nombre del Guarda</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Fecha de Revision</span>
            </th>
            
        </tr>
    </thead>
    <tbody>
        <?php

            require_once "../Models/conexion.php";
            require_once "../Models/consultas.php";
            require_once "../Controllers/mostrarInfoAdmin.php";
            cargarNovedadesPDF();

        ?>
    </tbody>
</table>