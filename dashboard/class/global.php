<?php
class Globales
{
    public static function addSocio($nombres, $apellidos, $dni, $fecha_nacimiento, $nombre_esposa,
        $numero_hijos, $telefono, $direccion, $estatus, $base_sectorial, $tipo_sello)
    {
        global $conn;
        date_default_timezone_set('America/Lima');

        $sql = "INSERT INTO tbl_socios (
                    nombres, apellidos, dni, fecha_nacimiento, nombre_esposa, numero_hijos,
                    telefono, direccion_dni, estatus, base_sectorial, tipo_sello, tipo_user, fecha_creacion
                ) VALUES (
                    :nombres, :apellidos, :dni, :fecha_nacimiento, :nombre_esposa, :numero_hijos,
                    :telefono, :direccion, :estatus, :base_sectorial, :tipo_sello, '1', NOW()
                )";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':nombres', $nombres);
        $stmt->bindValue(':apellidos', $apellidos);
        $stmt->bindValue(':dni', $dni);
        $stmt->bindValue(':fecha_nacimiento', $fecha_nacimiento);
        $stmt->bindValue(':nombre_esposa', $nombre_esposa);
        $stmt->bindValue(':numero_hijos', $numero_hijos);
        $stmt->bindValue(':telefono', $telefono);
        $stmt->bindValue(':direccion', $direccion); // → este será direccion_dni en la tabla
        $stmt->bindValue(':estatus', $estatus);
        $stmt->bindValue(':base_sectorial', $base_sectorial);
        $stmt->bindValue(':tipo_sello', $tipo_sello);

        if ($stmt->execute()) {
            return $conn->lastInsertId();
        }

        return false;
    }
    public static function addTercero($nombres, $apellidos, $dni, $fecha_nacimiento, $nombre_esposa,
        $numero_hijos, $telefono, $direccion, $estatus, $base_sectorial, $tipo_sello, $tipo_ruc, $ruc, $razon_social, $direccion_fiscal)
    {
        global $conn;
        date_default_timezone_set('America/Lima');

        $sql = "INSERT INTO tbl_socios (
                    nombres, apellidos, dni, fecha_nacimiento, nombre_esposa, numero_hijos,
                    telefono, direccion_dni, estatus, base_sectorial, tipo_sello, tipo_ruc, ruc, tipo_user, razon_social, direccion_fiscal, fecha_creacion
                ) VALUES (
                    :nombres, :apellidos, :dni, :fecha_nacimiento, :nombre_esposa, :numero_hijos,
                    :telefono, :direccion, :estatus, :base_sectorial, :tipo_sello, :tipo_ruc, :ruc, '2', :razon_social, :direccion_fiscal, NOW()
                )";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':nombres', $nombres);
        $stmt->bindValue(':apellidos', $apellidos);
        $stmt->bindValue(':dni', $dni);
        $stmt->bindValue(':fecha_nacimiento', $fecha_nacimiento);
        $stmt->bindValue(':nombre_esposa', $nombre_esposa);
        $stmt->bindValue(':numero_hijos', $numero_hijos);
        $stmt->bindValue(':telefono', $telefono);
        $stmt->bindValue(':direccion', $direccion);
        $stmt->bindValue(':estatus', $estatus);
        $stmt->bindValue(':base_sectorial', $base_sectorial);
        $stmt->bindValue(':tipo_sello', $tipo_sello);
        $stmt->bindValue(':tipo_ruc', $tipo_ruc);
        $stmt->bindValue(':ruc', $ruc);
        $stmt->bindValue(':razon_social', $razon_social);
        $stmt->bindValue(':direccion_fiscal', $direccion_fiscal);

        if ($stmt->execute()) {
            return $conn->lastInsertId();
        }

        return false;
    }
    public static function addHijo($nombre_hijo, $apellido_hijo, $id_socio)
    {
        global $conn;
        date_default_timezone_set('America/Lima');

        $sql = "INSERT INTO tbl_hijos_socios (
            nombres, apellidos, id_socio, fecha_creacion
        ) VALUES (
            :nombres, :apellidos, :id_socio, NOW()
        )";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':nombres', $nombre_hijo);
        $stmt->bindValue(':apellidos', $apellido_hijo);
        $stmt->bindValue(':id_socio', $id_socio);
        
        $stmt->execute();

        return $stmt;
    }    
    public static function addClasificacion($marca, $puntaje)
    {
        global $conn;
        date_default_timezone_set('America/Lima');

        $sql = "INSERT INTO tbl_clasificacion_taza (
            marca, puntaje, fecha_creacion
        ) VALUES (
            :marca, :puntaje, NOW()
        )";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':marca', $marca);
        $stmt->bindValue(':puntaje', $puntaje);
        
        $stmt->execute();

        return $stmt;
    }    
    public static function addMateriales($nombre, $cantidad)
    {
        global $conn;
        date_default_timezone_set('America/Lima');

        $sql = "INSERT INTO tbl_materiales (
            nombre, cantidad, fecha_creacion
        ) VALUES (
            :nombre, :cantidad, NOW()
        )";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':nombre', $nombre);
        $stmt->bindValue(':cantidad', $cantidad);
        
        $stmt->execute();

        return $stmt;
    }  
            public static function getReporteLpa()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_reporte_lpa");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }      
    public static function getReporteLpaId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_reportes_lpa WHERE id_reporte_lpa = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
  
    public static function addReporteLpa($dni_socio, $productor, $base_sectorial, $tipo)
    {
        global $conn;
        date_default_timezone_set('America/Lima');

        $sql = "INSERT INTO tbl_reporte_lpa (
            dni, productor, base_sectorial, tipo, fecha_creacion
        ) VALUES (
            :dni_socio, :productor, :base_sectorial, :tipo, NOW()
        )";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':dni_socio', $dni_socio);
        $stmt->bindValue(':productor', $productor);
        $stmt->bindValue(':base_sectorial', $base_sectorial);
        $stmt->bindValue(':tipo', $tipo);
        
        $stmt->execute();

        return $stmt;
    }       
        public static function editDatos($id, $tara, $qq_netos, $muestra_general)
    {
        global $conn;

        // SQL para actualizar todos los campos de la membresía
        $sql = "UPDATE tbl_datos_valores 
                SET tara = :tara, 
                    qq_netos = :qq_netos, 
                    muestraGeneral = :muestra_general
                WHERE id = :id";

        $stmt = $conn->prepare($sql);

        // Asignar los valores a los parámetros
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tara', $tara);
        $stmt->bindParam(':qq_netos', $qq_netos);
        $stmt->bindParam(':muestra_general', $muestra_general);
        $stmt->execute();
        return $stmt;
    }   
        public static function editDatosTaza($id, $marca, $puntaje)
    {
        global $conn;

        // SQL para actualizar todos los campos de la membresía
        $sql = "UPDATE tbl_clasificacion_taza 
                SET marca = :marca, 
                    puntaje = :puntaje
                WHERE id = :id";

        $stmt = $conn->prepare($sql);

        // Asignar los valores a los parámetros
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':puntaje', $puntaje);
        $stmt->execute();
        return $stmt;
    }       
       public static function editDatosAcopio($id, $rendimiento_fisico, $porcentaje_rendimiento, $segunda, 
$porcentaje_segunda, $descarte, $porcentaje_descarte, $cascara, $porcentaje_cascara, $humedad)
    {
        global $conn;

        // SQL para actualizar todos los campos de la membresía
        $sql = "UPDATE tbl_acopio_materia_prima 
                SET rendimiento_fisico = :rendimiento_fisico, 
                    porcentaje_rendimiento = :porcentaje_rendimiento, 
                    segunda = :segunda,
                    porcentaje_segunda = :porcentaje_segunda,
                    descarte = :descarte,
                    porcentaje_descarte = :porcentaje_descarte,
                    cascara = :cascara,
                    porcentaje_cascara = :porcentaje_cascara,
                    humedad = :humedad
                WHERE id = :id";

        $stmt = $conn->prepare($sql);

        // Asignar los valores a los parámetros
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':rendimiento_fisico', $rendimiento_fisico);
        $stmt->bindParam(':porcentaje_rendimiento', $porcentaje_rendimiento);
        $stmt->bindParam(':segunda', $segunda);
        $stmt->bindParam(':porcentaje_segunda', $porcentaje_segunda);
        $stmt->bindParam(':descarte', $descarte);
        $stmt->bindParam(':porcentaje_descarte', $porcentaje_descarte);
        $stmt->bindParam(':cascara', $cascara);
        $stmt->bindParam(':porcentaje_cascara', $porcentaje_cascara);
        $stmt->bindParam(':humedad', $humedad);
        $stmt->execute();
        return $stmt;
    }      
        public static function editDatosLaboratorio($id, $taza, $descripcion, $marca)
    {
        global $conn;

        // SQL para actualizar todos los campos de la membresía
        $sql = "UPDATE tbl_acopio_materia_prima 
                SET taza = :taza, 
                    descripcion = :descripcion, 
                    marca = :marca
                WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':taza', $taza);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':marca', $marca);
        $stmt->execute();
        return $stmt;
    }       
        public static function editBaseSectorialId($id, $nombre)
    {
        global $conn;

        // SQL para actualizar todos los campos de la membresía
        $sql = "UPDATE tbl_base_sectorial 
                SET nombre = :nombre
                WHERE id = :id";

        $stmt = $conn->prepare($sql);

        // Asignar los valores a los parámetros
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        return $stmt;
    }       
                public static function getEmpresa($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_empresa WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    } 
                public static function mdlObtenerAcopioPorCodigo($codigo)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_acopio_materia_prima WHERE codigo=:codigo");
        $statement->bindValue(":codigo", $codigo);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    } 
            public static function mdlObtenerAcopioPorId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_acopio_materia_prima WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    } 
        public static function addAcopio($dni_socio, $productor, 
    $base_sectorial, $tipo, $cantida_sacos, $kilos_brutos, 
    $tara, $kilos_netos, $qq_netos, $rendimiento_fisico, $porcentaje_rendimiento, $segunda, 
    $porcentaje_segunda, $descarte, $porcentaje_descarte, $cascara, $porcentaje_cascara, $humedad)
    {
        global $conn;
        date_default_timezone_set('America/Lima');

        $stmt = $conn->query("SHOW TABLE STATUS LIKE 'tbl_acopio_materia_prima'");
        $tableStatus = $stmt->fetch(PDO::FETCH_ASSOC);
        $nextId = $tableStatus['Auto_increment'];

        $codigoGenerado = $tipo . '-' . $nextId;

        $sql = "INSERT INTO tbl_acopio_materia_prima (
                    codigo, dni_socio, productor, base_sectorial, tipo, cantida_sacos,
                    kilos_brutos, tara, kilos_netos, qq_netos, rendimiento_fisico, porcentaje_rendimiento,
                    segunda, porcentaje_segunda, descarte, porcentaje_descarte, cascara,
                    porcentaje_cascara, humedad, fecha
                ) VALUES (
                    :codigo, :dni_socio, :productor, :base_sectorial, :tipo, :cantida_sacos,
                    :kilos_brutos, :tara, :kilos_netos, :qq_netos, :rendimiento_fisico, :porcentaje_rendimiento,
                    :segunda, :porcentaje_segunda, :descarte, :porcentaje_descarte, :cascara,
                    :porcentaje_cascara, :humedad, NOW()
                )";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':codigo', $codigoGenerado); // ✅ usar código generado
        $stmt->bindValue(':dni_socio', $dni_socio);
        $stmt->bindValue(':productor', $productor);
        $stmt->bindValue(':base_sectorial', $base_sectorial);
        $stmt->bindValue(':tipo', $tipo);
        $stmt->bindValue(':cantida_sacos', $cantida_sacos);
        $stmt->bindValue(':kilos_brutos', $kilos_brutos);
        $stmt->bindValue(':tara', $tara);
        $stmt->bindValue(':kilos_netos', $kilos_netos);
        $stmt->bindValue(':qq_netos', $qq_netos);
        $stmt->bindValue(':rendimiento_fisico', $rendimiento_fisico);
        $stmt->bindValue(':porcentaje_rendimiento', $porcentaje_rendimiento);
        $stmt->bindValue(':segunda', $segunda);
        $stmt->bindValue(':porcentaje_segunda', $porcentaje_segunda);
        $stmt->bindValue(':descarte', $descarte);
        $stmt->bindValue(':porcentaje_descarte', $porcentaje_descarte);
        $stmt->bindValue(':cascara', $cascara);
        $stmt->bindValue(':porcentaje_cascara', $porcentaje_cascara);
        $stmt->bindValue(':humedad', $humedad);

        $stmt->execute();

        return $stmt;
    }
    public static function getDatosValores($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_datos_valores WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ); // <--- este es el cambio clave
        return $result;
    }
    public static function getClasificacion()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_clasificacion_taza");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
    public static function getClasificacionId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_clasificacion_taza WHERE id = :id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }     
           public static function getBaseSectorial()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_base_sectorial");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
           public static function getBaseSectorialId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_base_sectorial WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }     
               public static function getTipoSello()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_tipo_sello");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
               public static function getTipoRuc()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_tipo_ruc");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }     
               public static function getEstatus()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_estatus");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }     
            public static function getAcopioMateriaPrima()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_acopio_materia_prima");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
    public static function getAcopioMateriaPrimaId($id)
    {
        global $conn;
        $sql = "SELECT 
                    a.*, 
                    s.nombres AS nombre_socio,
                    b.nombre_base AS nombre_base
                FROM tbl_acopio_materia_prima a
                LEFT JOIN tbl_socios s ON a.dni_socio = s.dni
                LEFT JOIN tbl_base_sectorial b ON a.base_sectorial = b.id
                WHERE a.id = :id";

        $statement = $conn->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public static function getBoletas()
    {
        global $conn;
        $sql = "
            SELECT b.*, 
                f.nombre_forma, 
                e.nombre_estado_pago
            FROM tbl_boletas b
            LEFT JOIN tbl_formas_pago f ON b.forma_pago = f.id
            LEFT JOIN tbl_estado_pago e ON b.estado = e.id
        ";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getFacturas()
    {
        global $conn;
        $sql = "
            SELECT b.*, 
                f.nombre_forma, 
                e.nombre_estado_pago
            FROM tbl_facturas b
            LEFT JOIN tbl_formas_pago f ON b.forma_pago = f.id
            LEFT JOIN tbl_estado_pago e ON b.estado = e.id
        ";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public static function getNotasVenta()
    {
        global $conn;
        $sql = "
            SELECT b.*, 
                f.nombre_forma, 
                e.nombre_estado_pago
            FROM tbl_nota_venta b
            LEFT JOIN tbl_formas_pago f ON b.forma_pago = f.id
            LEFT JOIN tbl_estado_pago e ON b.estado = e.id
        ";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }    
    public static function getUser($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_personal WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    } 
        public static function getSocios()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_socios WHERE tipo_user = '1'");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
        public static function get_reporte_lpa()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_reporte WHERE tipo_user = '1'");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }     
        public static function getMateriales()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_materiales");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }     
        public static function getTerceros()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_socios WHERE tipo_user = '2'");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }     
        public static function getTercerosId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_socios WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }    
    public static function getPersonal()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_personal");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
    public static function getPersonalId($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_personal WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    } 
    public static function getProductos()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_productos");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }      
           public static function getAlmacenes()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_almacenes");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }            
}
?>