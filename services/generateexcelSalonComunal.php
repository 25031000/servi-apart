<?php

header("content-Type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=Reporte_SalonComunal.xls");
echo "\xEF\xBB\xBF"; 

?>

<table class="table table-hover ">
    <thead>
    <thead>
        <tr class="d-flex row border rounded-top rounded-3">
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div> <span class="ms-2">Identificacion</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Nombre</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div> <span class="ms-2">Apellidos</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div> <span class="ms-2">Telefonos</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Correo</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Dia Reserva</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Torre</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Apartamento</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Hora Inicio</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Hora Finalizacion</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Mesas</span>
            </th>
            <th class="d-flex col-md-2">
                <div
                    style="padding-bottom: 8px; border-bottom: 3px solid #18d26e; justify-content: center; display: flex; align-items:center; width: 45px; height: 45px;">
                </div>
                <span class="ms-2">Sillas</span>
            </th>
        </tr>
    </thead>
        
  
    <tbody>
        <?php

            require_once "../Models/conexion.php";
            require_once "../Models/consultas.php";
            require_once "../Controllers/mostrarInfoAdmin.php";
            cargarReservasEX()

        ?>
    </tbody>
</table>