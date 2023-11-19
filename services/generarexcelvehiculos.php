<?php

header("content-Type: application/xls");
header("content-Disposition: attachment; filename=reporte_vehiculos.xls");

?>

<table class="table table-hover ">
<thead>
        <tr class="d-flex row border rounded-top rounded-3">
            <th class="d-flex col-md-2">
                <span class="ms-2">Placa</span>
            </th>
            <th class="d-flex col-md-2">
            
                <span class="ms-2">Marca</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Referencia</span>
            </th>
            <th class="d-flex col-md-2">
            
                <span class="ms-2">Modelo</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Identificacion Residente</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Estacionamiento Asignado</span>
            </th>
            <th class="d-flex col-md-2">
             <span class="ms-2">Fecha de Registro</span>
            </th>
            
        </tr>
    </thead>
    <tbody>
        <?php

            require_once "../Models/conexion.php";
            require_once "../Models/consultas.php";
            require_once "../Controllers/mostrarInfoAdmin.php";
            cargarVehiculosPDF();

        ?>
    </tbody>
</table>