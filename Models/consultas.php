<?php

//CREAMOS UNA CLASE QUE CONTENGA TODAS LAS FUNCIONES
//CRUD DEL SISTEMA

class Consultas
{

    //FUNCIONES MODULOS ADMINISTRADOR

    public function insertarUserEx($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $claveMd, $rol, $estado, $torre, $apartamento)
    {

        //CREAMOS EL OBJETO DE CONEXION
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        //SELECT DE USUARIO REGISTRADO EN EL SISTEMA
        $consultar = 'SELECT * FROM usuarios WHERE email=:email OR identificacion=:identificacion';
        $result = $conexion->prepare($consultar);

        $result->bindParam(":email", $email);

        $result->bindParam(":identificacion", $identificacion);

        $result->execute();

        $f = $result->fetch();

        if ($f) {
            echo '<script>alert("Los datos de usuario ya se encuentran registrados")</script>';
            echo "<script>location.href = '../Views/client-site/page-login.html'</script>";
        } else {

            //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
            $insertar = "INSERT INTO usuarios(identificacion, tipo_doc, nombres, apellidos, email, telefono, clave, rol, estado, torre, apartamento) 
            VALUES(:identificacion, :tipo_doc, :nombres, :apellidos, :email, :telefono, :claveMd, :rol, :estado, :torre, :apartamento)";


            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($insertar);


            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":tipo_doc", $tipo_doc);
            $result->bindParam(":nombres", $nombres);
            $result->bindParam(":apellidos", $apellidos);
            $result->bindParam(":email", $email);
            $result->bindParam(":telefono", $telefono);
            $result->bindParam(":claveMd", $claveMd);
            $result->bindParam(":rol", $rol);
            $result->bindParam(":estado", $estado);
            $result->bindParam(":torre", $torre);
            $result->bindParam(":apartamento", $apartamento);

            //EJECUTAMOS EL INSERT
            $result->execute();

            echo '<script>alert("Te has registrado exitosamente, debes esperar a que un administrador te autorize")</script>';
            echo "<script>location.href = '../Views/client-site/page-login.html'</script>";
        }

    }

    public function actualizarFotoAdmin($id, $foto)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = "UPDATE usuarios SET foto =:foto
                WHERE identificacion=:id";

        $result = $conexion->prepare($actualizar);


        $result->bindParam("id", $id);
        $result->bindParam("foto", $foto);

        $result->execute();

        echo '<script>
                alert("Infomación de usuario actualizada ;)")
            </script>';

        echo "<script>
                location.href = '../Views/Administrador/perfil.php?id=$id'
            </script>";
    }

    public function insertarUserAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $claveMd, $rol, $estado, $torre, $apartamento, $foto)
    {

        //CREAMOS EL OBJETO DE CONEXION
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        //SELECT DE USUARIO REGISTRADO EN EL SISTEMA
        $consultar = 'SELECT * FROM usuarios WHERE email=:email OR identificacion=:identificacion';
        $result = $conexion->prepare($consultar);

        $result->bindParam(":email", $email);

        $result->bindParam(":identificacion", $identificacion);

        $result->execute();

        $f = $result->fetch();

        if ($f) {
            echo '<script>alert("Los datos de usuario ya se encuentran registrados")</script>';
            echo "<script>location.href = '../Views/Administrador/registrar-usuario.php'</script>";
        } else {

            //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
            $insertar = "INSERT INTO usuarios(identificacion, tipo_doc, nombres, apellidos, email, telefono, clave, rol, estado, torre, apartamento, foto) 
            VALUES(:identificacion, :tipo_doc, :nombres, :apellidos, :email, :telefono, :claveMd,  :rol, :estado, :torre, :apartamento, :foto)";


            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($insertar);


            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":tipo_doc", $tipo_doc);
            $result->bindParam(":nombres", $nombres);
            $result->bindParam(":apellidos", $apellidos);
            $result->bindParam(":email", $email);
            $result->bindParam(":telefono", $telefono);
            $result->bindParam(":claveMd", $claveMd);
            $result->bindParam(":rol", $rol);
            $result->bindParam(":estado", $estado);
            $result->bindParam(":torre", $torre);
            $result->bindParam(":apartamento", $apartamento);
            $result->bindParam(":foto", $foto);

            //EJECUTAMOS EL INSERT
            $result->execute();

            echo '<script>alert("Usuario registrado con exito")</script>';

        }

    }



    public function mostrarUsuariosAdmin()
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM usuarios ORDER BY nombres ASC ";

        $result = $conexion->prepare($consultar);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }


    public function mostrarUsuarioEditarAdmin($identificacion)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM usuarios WHERE identificacion=:identificacion";
        $result = $conexion->prepare($consultar);

        $result->bindParam("identificacion", $identificacion);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }
    public function mostrarUsuarioRes($identificacion)
    {

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM usuarios WHERE identificacion=:identificacion";
        $result = $conexion->prepare($consultar);

        $result->bindParam("identificacion", $identificacion);

        $result->execute();


        /* while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f; */
        $data = $result->fetch(PDO::FETCH_NUM);
        if ($data)
            return $data;
    }



    public function mostrarFotosVehiculoAdmin($placa)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM vehiculo v INNER JOIN usuarios u ON v.identificacion = u.identificacion WHERE v.placa = :placa";
        $result = $conexion->prepare($consultar);

        $result->bindParam("placa", $placa);


        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }

    public function mostrarNovedades($placa)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT *, u.nombres, v.placa
            FROM novedad_vehiculo n
            INNER JOIN usuarios u ON n.identificacion = u.identificacion
            INNER JOIN vehiculo v ON n.placa = v.placa
            WHERE v.placa = :placa;";
        $result = $conexion->prepare($consultar);

        $result->bindParam("placa", $placa);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }

    public function mostrarNovedadEditarAdmin($id_nov)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM novedad_vehiculo WHERE id_nov=:id_nov";
        $result = $conexion->prepare($consultar);

        $result->bindParam("id_nov", $id_nov);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }






    public function actualizarUserAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $rol, $estado)
    {

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE usuarios SET tipo_doc=:tipo_doc, nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono, rol=:rol, estado=:estado WHERE identificacion=:identificacion ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam("identificacion", $identificacion);
        $result->bindParam("tipo_doc", $tipo_doc);
        $result->bindParam("nombres", $nombres);
        $result->bindParam("apellidos", $apellidos);
        $result->bindParam("email", $email);
        $result->bindParam("telefono", $telefono);
        $result->bindParam("rol", $rol);
        $result->bindParam("estado", $estado);

        $result->execute();

        echo '<script>alert("Información de usuario actualizada")</script>';
        echo "<script>location.href = '../Views/Administrador/ver-usuario.php'</script>";
    }

    public function modificarCuentaAdmin($identificacion, $tipo_doc, $nombres, $apellidos, $email, $telefono, $torre, $apartamento)
    {

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE usuarios SET tipo_doc=:tipo_doc, nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono, torre=:torre, apartamento=:apartamento WHERE identificacion=:identificacion ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam("identificacion", $identificacion);
        $result->bindParam("tipo_doc", $tipo_doc);
        $result->bindParam("nombres", $nombres);
        $result->bindParam("apellidos", $apellidos);
        $result->bindParam("email", $email);
        $result->bindParam("telefono", $telefono);
        $result->bindParam("torre", $torre);
        $result->bindParam("apartamento", $apartamento);

        $result->execute();

        echo '<script>alert("Información actualizada")</script>';
        echo "<script>location.href = '../Views/Administrador/ver-usuario.php'</script>";
    }



    public function crearPublicacion($titulo, $descripcion)
    {
        try {
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $query = "INSERT INTO publicaciones(titulo, descripcion) VALUES(:titulo, :descripcion)";
            $statement = $conexion->prepare($query);

            $statement->bindParam(':titulo', $titulo);
            $statement->bindParam(':descripcion', $descripcion);


            $response = $statement->execute();

            if (!$response)
                return false;
            return true;
        } catch (\Throwable $th) {
            echo "Ha ocurrido un problema al crear la publicacion :( " . $th;
        }
    }


    public function eliminarPubli($id_publi)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM publicaciones Where id_publi=:id_publi";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id_publi", $id_publi);

        $result->execute();
        echo '<script>alert("Publicacion Eliminada")</script>';
        echo "<script>location.href = '../Views/Administrador/ver-publicaciones.php'</script>";
    }


    public function mostrarPublicaciones()
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM publicaciones";

        $result = $conexion->prepare($consultar);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }
    public function modificarPubli($id_publi, $titulo, $descripcion)
    {

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE publicaciones SET  titulo=:titulo, descripcion=:descripcion WHERE id_publi=:id_publi";
        $result = $conexion->prepare($actualizar);

        $result->bindParam("id_publi", $id_publi);
        $result->bindParam("titulo", $titulo);
        $result->bindParam("descripcion", $descripcion);


        $result->execute();

        echo '<script>alert("Información actualizada")</script>';
        //echo "<script>location.href = '../Views/Administrador/ver-publicaciones.php'</script>";//
    }

    public function mostrarPubliEditar($id_publi)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM publicaciones WHERE id_publi=:id_publi";
        $result = $conexion->prepare($consultar);

        $result->bindParam("id_publi", $id_publi);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }




    public function mostrarVehiculosAdmin()
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM vehiculo ORDER BY fecha DESC ";

        $result = $conexion->prepare($consultar);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }

    public function modificarVehiculosAdmin($placa, $identificacion, $parqueadero, $marca, $referencia, $modelo)
    {

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE vehiculo SET parqueadero=:parqueadero, marca=:marca, referencia=:referencia, modelo=:modelo WHERE placa=:placa ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam("parqueadero", $parqueadero);
        $result->bindParam("marca", $marca);
        $result->bindParam("referencia", $referencia);
        $result->bindParam("modelo", $modelo);
        $result->bindParam("placa", $placa);

        $result->execute();

        echo '
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Información actualizada",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Administrador/ver-vehiculo.php";
            })
        </script>';

    }

    public function mostrarVehiculoEditarAdmin($placa)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM vehiculo WHERE placa=:placa";
        $result = $conexion->prepare($consultar);

        $result->bindParam("placa", $placa);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }

    public function modificarNovedadesAdmin($id_nov, $placa, $identificacion, $novedad)
    {

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE novedad_vehiculo SET novedad=:novedad WHERE id_nov=:id_nov ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam("id_nov", $id_nov);
        $result->bindParam("novedad", $novedad);

        $result->execute();

        echo '
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Información actualizada",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Administrador/ver-novedades.php?placa=' . $placa . '";
            })
        </script>';
    }

    public function modificarNovedadesPS($id_nov, $placa, $identificacion, $novedad)
    {

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE novedad_vehiculo SET novedad=:novedad WHERE id_nov=:id_nov ";
        $result = $conexion->prepare($actualizar);

        $result->bindParam("id_nov", $id_nov);
        $result->bindParam("novedad", $novedad);

        $result->execute();

        echo '
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Información actualizada",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Seguridad/ver-novedades.php?placa=' . $placa . '";
            })
        </script>';
    }

    public function eliminarVehiculosAdmin($placa)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "   DELETE FROM novedad_vehiculo WHERE placa=:placa;
                            DELETE FROM vehiculo WHERE placa=:placa;";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":placa", $placa);

        $result->execute();
        echo '
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Vehiculo Eliminado",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Administrador/ver-vehiculo.php";
            })
        </script>';
    }

    public function eliminarNovedadesAdmin($id_nov, $placa)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM novedad_vehiculo Where id_nov=:id_nov";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id_nov", $id_nov);


        $result->execute();
        echo '
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Novedad Eliminada Exitosamente",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Administrador/ver-novedades.php?placa=' . $placa . '";
            })
        </script>';

    }


    public function eliminarNovedadesGuarda($id_nov, $placa)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM novedad_vehiculo Where id_nov=:id_nov";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id_nov", $id_nov);


        $result->execute();
        echo '
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Novedad Eliminada Exitosamente",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Seguridad/ver-novedades.php?placa=' . $placa . '";
            })
        </script>';

    }

    public function mostrarVehiculosRes($identificacion)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM vehiculo WHERE identificacion = :identificacion";

        $result = $conexion->prepare($consultar);
        $result->bindParam(":identificacion", $identificacion);


        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }

    public function registrarNovedadPS($placa, $novedad, $identificacion)
    {

        //CREAMOS EL OBJETO DE CONEXION
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();


        // Verificar si la placa existe en la base de datos
        $consultarPlaca = 'SELECT * FROM vehiculo WHERE placa=:placa';
        $resultPlaca = $conexion->prepare($consultarPlaca);
        $resultPlaca->bindParam(":placa", $placa);
        $resultPlaca->execute();
        $fPlaca = $resultPlaca->fetch();

        if ($fPlaca) {





            //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
            $insertar = "INSERT INTO novedad_vehiculo(placa, novedad, identificacion) 
            VALUES(:placa, :novedad, :identificacion)";


            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($insertar);


            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
            $result->bindParam(":placa", $placa);
            $result->bindParam(":novedad", $novedad);
            $result->bindParam(":identificacion", $identificacion);

            //EJECUTAMOS EL INSERT
            $result->execute();

            echo '
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Novedad registrada exitosamente",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Seguridad/registrar-novedad.php";
            })
        </script>';

        } else {
            // La placa no existe en la base de datos, muestra un mensaje de error
            echo '<script>
                
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "La placa que ingresaste no se encuentra en el sistema. Verifica que este bien",
                    confirmButtonText: "Ok"
                }).then((result)=>{
                    if(result.isConfirmed){
                       location.href="../Views/Seguridad/ver-novedades.php"; 
                    }
                    
                })
            </script>';
        }










    }



    public function eliminarUserAdmin($id)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM usuarios Where identificacion=:id";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id", $id);

        $result->execute();
        echo '<script>alert("Usuario Eliminado")</script>';
        echo "<script>location.href = '../Views/Administrador/ver-usuario.php'</script>";
    }

    public function verPerfil($identificacion)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $buscar = "SELECT * FROM usuarios WHERE identificacion=:id ";

        $result = $conexion->prepare($buscar);

        $result->bindParam(':id', $identificacion);
        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }

    public function registrarVehiculoAdmin($placa, $marca, $referencia, $modelo, $identificacion, $parqueadero, $foto1, $foto2, $foto3, $foto4)
    {

        //CREAMOS EL OBJETO DE CONEXION
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        //Validamos que la placa ingresada no esté en el sistema
        $consultar = 'SELECT * FROM vehiculo WHERE placa=:placa';
        $result = $conexion->prepare($consultar);
        $result->bindParam(":placa", $placa);
        $result->execute();
        $f = $result->fetch();


        // Verificar si la identificación existe en la base de datos
        $consultarIdentificacion = 'SELECT * FROM usuarios WHERE identificacion=:identificacion';
        $resultIdentificacion = $conexion->prepare($consultarIdentificacion);
        $resultIdentificacion->bindParam(":identificacion", $identificacion);
        $resultIdentificacion->execute();
        $fIdentificacion = $resultIdentificacion->fetch();


        //Verificamos que el parqueadero asignado no esté relacionado a otro vehiculo
        $consultarParqueadero = 'SELECT * FROM vehiculo WHERE parqueadero=:parqueadero';
        $resultParqueadero = $conexion->prepare($consultarParqueadero);
        $resultParqueadero->bindParam(":parqueadero", $parqueadero);
        $resultParqueadero->execute();
        $fParqueadero = $resultParqueadero->fetch();



        if ($f) {
            echo '
            <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Parece que este vehiculo ya esta registrado",
                confirmButtonText: "Ok"
            }).then((result)=>{
                if(result.isConfirmed){
                   location.href="../Views/Administrador/registrar-vehiculo.php"; 
                }
                
            })
            </script>';

        } else if ($fParqueadero) {
            echo '<script>
                
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El parqueadero que ingresaste ya está asignado a otro vehiculo. Verifica que este bien",
                        confirmButtonText: "Ok"
                    }).then((result)=>{
                        if(result.isConfirmed){
                           location.href="../Views/Administrador/registrar-vehiculo.php"; 
                        }
                        
                    })
                </script>';
        }


        else if ($fIdentificacion) {
            //CREAMOS LA VARIABLE QUE CONTENDRA LA CONSULTA A EJECUTAR
            $insertar = "INSERT INTO vehiculo(placa, marca, referencia, modelo, identificacion, parqueadero, foto1, foto2, foto3, foto4) 
            VALUES(:placa, :marca, :referencia, :modelo, :identificacion, :parqueadero, :foto1, :foto2, :foto3, :foto4)";


            //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
            $result = $conexion->prepare($insertar);


            //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
            $result->bindParam(":placa", $placa);
            $result->bindParam(":marca", $marca);
            $result->bindParam(":referencia", $referencia);
            $result->bindParam(":modelo", $modelo);
            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":parqueadero", $parqueadero);
            $result->bindParam(":foto1", $foto1);
            $result->bindParam(":foto2", $foto2);
            $result->bindParam(":foto3", $foto3);
            $result->bindParam(":foto4", $foto4);

            //EJECUTAMOS EL INSERT
            $result->execute();

            echo '
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Vehiculo registrado exitosamente",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Administrador/registrar-vehiculo.php";
            })
        </script>';

        } else {
            // La identificación no existe en la base de datos, muestra un mensaje de error
            echo '<script>
                
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "La identificacion que ingresaste no se encuentra en el sistema. Verifica que este bien",
                    confirmButtonText: "Ok"
                }).then((result)=>{
                    if(result.isConfirmed){
                       location.href="../Views/Administrador/registrar-vehiculo.php"; 
                    }
                    
                })
            </script>';
        }










    }


    public function insertarPeticion($titulo, $descripcion, $identificacion)
    {

        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $insertar = "INSERT INTO peticiones(titulo, descripcion, identificacion)
        VALUES (:titulo, :descripcion, :identificacion)";

        $result = $conexion->prepare($insertar);

        $result->bindParam(":titulo", $titulo);
        $result->bindParam(":descripcion", $descripcion);
        $result->bindParam(":identificacion", $identificacion);

        $result->execute();

        echo '
        <script>
        
        Swal.fire({
            icon: "success",
            title:"Peticion registrada exitosamente",
            showConfirmButton: false,
            timer: 2000
        }).then((result)=>{
            location.href="../Views/Residente/registrar-peticion.php";
        })
    </script>';

    }

    public function registrarDia($identificacion, $dia_reserva, $hora_inicio, $hora_finalizacion, $mesas, $sillas, $tipo_evento)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = 'SELECT * FROM reserva_salon WHERE dia_reserva=:dia_reserva';
        $result = $conexion->prepare($consultar);

        $result->bindParam(":dia_reserva", $dia_reserva);

        $result->execute();

        $f = $result->fetch();

        if ($f) {
            return false; // Indicar que ya existe una reserva para el mismo día.
        } else {

            $query = "SELECT * FROM usuarios WHERE identificacion=:identificacion";
            $statement = $conexion->prepare($query);

            $statement->bindParam(":identificacion", $identificacion);

            $statement->execute();

            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if (isset($result['identificacion'])) {

                $insertar = "INSERT INTO reserva_salon (identificacion, dia_reserva, hora_inicio, hora_finalizacion, mesas, sillas, tipo_evento)
                            VALUES (:identificacion, :dia_reserva, :hora_inicio, :hora_finalizacion, :mesas, :sillas, :tipo_evento)";

                $result = $conexion->prepare($insertar);

                // Vincular los parámetros

                $result->bindParam(":identificacion", $identificacion);
                $result->bindParam(":dia_reserva", $dia_reserva);
                $result->bindParam(":hora_inicio", $hora_inicio);
                $result->bindParam(":hora_finalizacion", $hora_finalizacion);
                $result->bindParam(":mesas", $mesas);
                $result->bindParam(":sillas", $sillas);
                $result->bindParam(":tipo_evento", $tipo_evento);

                if ($result->execute()) {
                    return true; // Indicar éxito en la inserción.
                } else {
                    return false; // Indicar error en la inserción. PRUEBA DE UN COMMIT
                }
            } else {
                return false;
            }


        }
    }

    public function eliminarDiaReservaSC($id_reserva)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM reserva_salon WHERE id_reserva=:id_reserva";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id_reserva", $id_reserva);

        if ($result->execute()) {
            echo '<script>alert("Reserva Eliminada Con Éxito")</script>';
            echo "<script>location.href = '../Views/Administrador/ver-ReservaSC.php'</script>";
        } else {
            echo '<script>alert("Error al eliminar la reserva")</script>';
        }
    }

    public function eliminarDiaReservaPSE($id_reserva)
    {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM reserva_salon WHERE id_reserva=:id_reserva";
        $result = $conexion->prepare($eliminar);

        $result->bindParam(":id_reserva", $id_reserva);

        if ($result->execute()) {
            echo '<script>alert("Reserva Eliminada Con Éxito")</script>';
            echo "<script>location.href = '../Views/Residente/ver-ReservaRes.php'</script>";
        } else {
            echo '<script>alert("Error al eliminar la reserva")</script>';
        }
    }

    public function mostrarReservaEditarAdmin($id_reserva)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM reserva_salon WHERE id_reserva=:id_reserva";
        $result = $conexion->prepare($consultar);

        $result->bindParam(":id_reserva", $id_reserva);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }

    // se creo para el editar en ver reserva residente no funciona todavia

    public function mostrarReservaRes($identificacion)
    {

        try {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM reserva_salon WHERE identificacion=:identificacion";
            $result = $conexion->prepare($consultar);

            $result->bindParam(":identificacion", $identificacion);

            $result->execute();
            $arr = $result->fetchAll(PDO::FETCH_ASSOC);

            return $arr;

        } catch (\Throwable $th) {
            echo $th->getMessage() . ":)";
        }


        /* while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f; */


    }

    public function mostrarReservaEditarRes($id_reserva)
    {
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM reserva_salon WHERE id_reserva=:id_reserva";
        $result = $conexion->prepare($consultar);

        $result->bindParam(":id_reserva", $id_reserva);

        $result->execute();


        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        return $f;
    }




    public function modificarReservaRes($id_reserva, $dia_reserva, $identificacion, $hora_inicio, $hora_finalizacion, $mesas, $sillas, $tipo_evento)
    {

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE reserva_salon SET dia_reserva=:dia_reserva,  hora_inicio=:hora_inicio, hora_finalizacion=:hora_finalizacion,  mesas=:mesas, sillas=:sillas, tipo_evento=:tipo_evento WHERE id_reserva=:id_reserva ";
        $result = $conexion->prepare($actualizar);


        $result->bindParam(":id_reserva", $id_reserva);
        $result->bindParam(":dia_reserva", $dia_reserva);
        $result->bindParam(":hora_inicio", $hora_inicio);
        $result->bindParam(":hora_finalizacion", $hora_finalizacion);
        $result->bindParam(":mesas", $mesas);
        $result->bindParam(":sillas", $sillas);
        $result->bindParam(":tipo_evento", $tipo_evento);



        $result->execute();

        echo ' 
            <script>
            
            Swal.fire({
                icon: "success",
                title:"Información actualizada",
                showConfirmButton: false,
                timer: 2000
            }).then((result)=>{
                location.href="../Views/Residente/ver-reservaRes.php?identificacion=' . $identificacion . '";
            })
        </script>';
    }



    public function modificarReservaAdmin($identificacion, $dia_reserva, $hora_inicio, $hora_finalizacion, $mesas, $sillas, $tipo_evento)
    {

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE reserva_salon SET identificacion=:identificacion,  dia_reserva=:dia_reserva, hora_inicio=:hora_inicio, hora_finalizacion=:hora_finalizacion, mesas=:mesas, sillas=:sillas, tipo_evento=:tipo_evento WHERE identificacion=:identificacion";
        $result = $conexion->prepare($actualizar);


        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":dia_reserva", $dia_reserva);
        $result->bindParam(":hora_inicio", $hora_inicio);
        $result->bindParam(":hora_finalizacion", $hora_finalizacion);
        $result->bindParam(":mesas", $mesas);
        $result->bindParam(":sillas", $sillas);
        $result->bindParam(":tipo_evento", $tipo_evento);

        $result->execute();

        echo '<script>alert("Información actualizada")</script>';
        echo "<script>location.href = '../Views/Administrador/ver-reservaSC.php'</script>";

    }




    public function actualizarClaveAdmin($identificacion, $claveMd)
    {


        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $actualizar = " UPDATE usuarios SET clave=:claveMd WHERE identificacion=:identificacion";
        $result = $conexion->prepare($actualizar);

        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":claveMd", $claveMd);

        $result->execute();

        echo '<script>alert("Clave Actualizada")</script>';
        echo "<script>location.href = '../Views/Administrador/perfil.php?id=$identificacion'</script>";
    }

    public function getUserByApartament(string $apartamento, string $torre): int
    {
        try {
            $objConexion = new conexion();

            $query = "SELECT * from usuarios WHERE apartamento=:apartamento AND torre=:torre";
            $statement = $objConexion->get_conexion()->prepare($query);

            $statement->bindParam(":apartamento", $apartamento, PDO::PARAM_INT);
            $statement->bindParam(":torre", $torre, PDO::PARAM_STR);

            $statement->execute();

            $arr = $statement->fetch(PDO::FETCH_ASSOC);
            if (!$arr)
                return -1;

            $userId = intval($arr['identificacion']);
            return $userId;
        } catch (\Throwable $th) {
            return -1;
        }
    }

    public function registrarPaquete(int $usuario, string $remitente): bool
    {
        try {
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();



            $query = "INSERT INTO paqueteria(usuario, remitente, fecha) VALUES(:usuario, :remitente, NOW())";
            $statement = $conexion->prepare($query);

            $statement->bindParam(':usuario', $usuario);
            $statement->bindParam(':remitente', $remitente);

            $response = $statement->execute();

            if (!$response)
                return false;
            return true;
        } catch (\Throwable $th) {
            echo "Ha ocurrido un problema al registrar el paquete :( " . $th;
        }
    }

    public function mostrarPaquetesAdmin(): array
    {
        try {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $query = "SELECT 
                            P.id,
                            U.nombres,
                            U.apellidos,
                            U.torre,
                            U.apartamento,
                            U.telefono,
                            P.remitente,
                            P.fecha
                            FROM usuarios U INNER JOIN paqueteria P ON U.identificacion=P.usuario;
                ";
            $statement = $conexion->prepare($query);


            $response = $statement->execute();
            if (!$response)
                return [];
            $result = $statement->fetchAll();
            return $result;

        } catch (\Throwable $th) {
            echo "error al listar los registros de paquetes: " . $th;
        }
    }
    public function mostrarReservasAdmin()
    {
        try {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $query = "SELECT S.id_reserva , 
                S.identificacion, 
                S.dia_reserva , 
                S.hora_inicio , 
                S.hora_finalizacion , 
                S.mesas , 
                S.sillas,
                S.tipo_evento,
                U.nombres,
                U.apellidos,
                U.email,
                U.telefono,
                U.torre,
                U.apartamento  FROM reserva_salon S INNER JOIN usuarios U ON S.identificacion=U.identificacion";
            $statement = $conexion->prepare($query);


            $response = $statement->execute();
            if (!$response)
                return;
            $result = $statement->fetchAll();
            return $result;

        } catch (\Throwable $th) {
            echo "error al listar los registros de las reservas: " . $th;
        }
    }
    public function mostrarReservasPS()
    {
        try {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $query = "SELECT S.id_reserva , 
                S.identificacion, 
                S.dia_reserva , 
                S.hora_inicio , 
                S.hora_finalizacion , 
                S.mesas , 
                S.sillas,
                S.tipo_evento,
                U.nombres,
                U.apellidos,
                U.email,
                U.telefono,
                U.torre,
                U.apartamento  FROM reserva_salon S INNER JOIN usuarios U ON S.identificacion=U.identificacion";
            $statement = $conexion->prepare($query);


            $response = $statement->execute();
            if (!$response)
                return;
            $result = $statement->fetchAll();
            return $result;

        } catch (\Throwable $th) {
            echo "error al listar los registros de las reservas: " . $th;
        }
    }

    /**
     * Contador de registros de tablas
     * 
     * @function registerCounter
     * 
     * @param string $table // nombre de la tabla a consultar 
     * @param string $id_name // nombre de la primary key de la tabla
     * @return string //resultado del conteo de registros
     * 
     * 
     */

    public function registerCounter(string $table, string $id_name): string
    {
        try {
            $objConexion = new Conexion();
            $query = "SELECT COUNT( " . $id_name . ") AS num FROM " . $table;
            $statement = $objConexion->get_conexion()->prepare($query);

            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $result[0]['num'];

        } catch (\Throwable $th) {
            echo "it had occurs an error when it was counting the table" . $th;
        }
    }

    /**
     * Metodo para mostrar paquetes en modulo de paqueteria con rol residente
     * 
     * @function mostrarPaqueteRes
     * 
     * @param string $user_id // identificacion del usuario 
     * @return array // registro de paquetes relacionados al apartamento de un usuario
     * 
     * 
     * 
     */
    public function mostrarPaqueteRes(string $user_id): array
    {
        try {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $query = "SELECT 
                            U.torre,
                            U.apartamento,
                            P.remitente,
                            P.fecha
                            FROM usuarios U INNER JOIN paqueteria P ON U.identificacion=P.usuario WHERE U.identificacion=:user_id;
                ";

            $statement = $conexion->prepare($query);
            $statement->bindParam(':user_id', $user_id, PDO::PARAM_STR);


            $response = $statement->execute();
            if (!$response)
                return [];
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if (count($result) == 0)
                return [];
            return $result;
        } catch (\Throwable $th) {
            echo "Error en la consulta :( " . $th;
        }
    }

    /**
     * Metodo para eliminar paquetes en modulo de paqueteria con rol residente
     * 
     * @function eliminarPaqueteRes
     * 
     * @param string $user_id // identificacion del usuario 
     * @return bool // respuesta boolean para actuar en base a ella.
     * 
     * 
     * 
     */
    public function eliminarPaqueteRes(string $user_id): bool
    {
        try {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $query = "DELETE FROM paqueteria WHERE usuario=:user_id";
            $statement = $conexion->prepare($query);
            $statement->bindParam(':user_id', $user_id, PDO::PARAM_STR);

            $response = $statement->execute();
            if (!$response)
                return false;
            return true;
        } catch (\Throwable $th) {
            echo "Error en la consulta :( " . $th;
        }
    }

    public function modificarCuentaResidente(string $user_id, string $tipo_doc, string $nombres, string $apellidos, string $email, string $telefono, string $clave, string $torre, string $apartamento) : bool{
        try {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $query = "UPDATE usuarios SET
                        tipo_doc = :tipo_doc,
                        nombres = :nombres,
                        apellidos = :apellidos,
                        email = :email,
                        telefono = :telefono,
                        clave = :clave,
                        torre = :torre,
                        apartamento = :apartamento WHERE identificacion = :identificacion";
            
            $statement = $conexion->prepare($query);
            $statement->bindParam(':identificacion', $user_id, PDO::PARAM_STR);
            $statement->bindParam(':tipo_doc', $tipo_doc, PDO::PARAM_STR);
            $statement->bindParam(':nombres', $nombres, PDO::PARAM_STR);
            $statement->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $statement->bindParam(':clave', $clave, PDO::PARAM_STR);
            $statement->bindParam(':torre', $torre, PDO::PARAM_STR);
            $statement->bindParam(':apartamento', $apartamento, PDO::PARAM_STR);
            
            $response = $statement->execute();
            
            return $response == false ? 0 : 1;

        } catch (\Throwable $th) {
            echo "Error en la consulta :( " . $th;
        }
    }

    public function modificarCuentaResidenteAlterna(string $user_id, string $tipo_doc, string $nombres, string $apellidos, string $email, string $telefono, string $torre, string $apartamento) : bool{
        try {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();

            $query = "UPDATE usuarios SET
                        tipo_doc = :tipo_doc,
                        nombres = :nombres,
                        apellidos = :apellidos,
                        email = :email,
                        telefono = :telefono,
                        torre = :torre,
                        apartamento = :apartamento WHERE identificacion = :identificacion";
            
            $statement = $conexion->prepare($query);
            $statement->bindParam(':identificacion', $user_id, PDO::PARAM_STR);
            $statement->bindParam(':tipo_doc', $tipo_doc, PDO::PARAM_STR);
            $statement->bindParam(':nombres', $nombres, PDO::PARAM_STR);
            $statement->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $statement->bindParam(':torre', $torre, PDO::PARAM_STR);
            $statement->bindParam(':apartamento', $apartamento, PDO::PARAM_STR);
            
            $response = $statement->execute();
            
            return $response == false ? 0 : 1;

        } catch (\Throwable $th) {
            echo "Error en la consulta :( " . $th;
        }
    }
}


//FUNCIONES MODULOS PRODUCTOS


// --------------------------------


class ValidarSesion
{
    public function iniciarSesion($email, $clave)
    {

        //CREAMOS EL OBJETO DE CONEXION
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = 'SELECT * FROM usuarios WHERE email=:email';

        //PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
        $result = $conexion->prepare($consultar);

        //CONVERTIMOS LOS ARGUMENTOS EN PARAMETROS
        $result->bindParam(":email", $email);

        $result->execute();

        //CONVERTIREMOS LA VARIABLE RESULT EN UN ARREGLO PARA SEGMENTAR LA INFORMACION

        $f = $result->fetch();

        if ($f) {
            //VALIDAMOS LA CLAVE
            if ($f['clave'] == $clave) {
                //VALIDAMOS EL ESTADO DE LA CUENTA

                if ($f['estado'] == "Activo") {
                    //SE REALIZA EL INICIO DE SESION

                    if (session_status() !== PHP_SESSION_ACTIVE)
                        session_start();
                    //CREAMOS VARIABLES DE SESION

                    $_SESSION['id'] = $f['identificacion'];
                    $_SESSION['email'] = $f['email'];
                    $_SESSION['rol'] = $f['rol'];
                    $_SESSION['AUTENTICADO'] = "SI";

                    //VALIDAMOS EL ROL PARA REDIRECCIONAR A LA INTERFAZ

                    switch ($f['rol']) {
                        case 'Administrador':
                            echo '<script>alert("Bienvenido señor administrador")</script>';
                            echo "<script>location.href = '../Views/Administrador/home.php'</script>";
                            break;

                        case 'Residente':
                            echo '<script>alert("Bienvenido señor residente")</script>';
                            echo "<script>location.href = '../Views/Residente/homeResidente.php'</script>";
                            break;

                        case 'Seguridad':
                            echo '<script>alert("Bienvenido señor personal de seguridad")</script>';
                            echo "<script>location.href = '../Views/Seguridad/homePS.php'</script>";
                            break;
                    }



                } else {
                    echo '<script>alert("La cuenta no está activa, contactese con el administrador")</script>';
                    echo "<script>location.href = '../Views/client-site/page-login.html'</script>";
                }
            } else {
                echo '<script>alert("Clave incorrecta")</script>';
                echo "<script>location.href = '../Views/client-site/page-login.html'</script>";
            }
        } else {
            echo '<script>alert("El usuario no existe")</script>';
            echo "<script>location.href = '../Views/client-site/page-login.html'</script>";
        }
    }


    public function cerrarSesion()
    {
        $objConexion = new Conexion();
        $objConexion = $objConexion->get_conexion();

        session_start();
        session_destroy();

        echo "<script>location.href = '../Views/client-site/page-login.html' </script>";
    }


}




?>