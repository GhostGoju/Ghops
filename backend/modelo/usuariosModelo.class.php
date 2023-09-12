<?PHP
//* ESTA ES LA CAPA DE USUARIOS. GESTIONA LOS DATOS DE LOS USUARIOS
//* ESATA CAPA TIENE SU PROPIA LOGIA LA CUAL SERA GESTIONAR LOS DATOS DE LA TABLA USUARIOS

require_once "bd/mysql.php";


class usuariosModelo                 //* ESTO ES UN PLANO DE UN NUEVO OBJETO
{
    var $conexion;                  //* ATRIBUTO

    function __construct()          //* METODO. EN EL MOMENTO EN LE QUE NASCA UN ELEMENTO USUARIOS MODELO SE DISPARA EL CONSTRUCTOR Y AUTOMANTICAMENTE SE CONECTA A LA BASE DE DATOS
    {
        $con = new dataBase();                         //* VARIABLE INTERNA ($CON). AQUI NACE EL OBJETO CON LA GENETICA QUE ESTA EL EL DOCUMENTO mysql (CLASE = DATABASE)
        $this->conexion = $con->getConexion();            //* Y ESTA INFORMACION QUE GUARDADA DENTRO DE LA VARIABLE $CON.
        //* SE INVOCA A SU VEZ EL METODO CONECTAR
        //* LA NUEVA CONEXION GUARDADA EN LA LINEA 15, SE ALMACENA DENTRO DEL ATRIBUTO CONEXION DE LA CLASE USUARIOS MODELO
    }

    //? (FUNCION DE TRAER TODA LA LISTA DE USUARIOS)
    public function getAllUsuarios()                          //*PUBLIC FUNCTION ES UN METODO EL CUAL PUEDE SER LLAMADO DENTRO DE LA FUNCION (EJE) USUARIOSMODELO.
    {
        $sql = "SELECT * FROM usuarios";                           //* ESTA ES UNA VARIABLE LOCAL DENTRO DE ESTA FUNCION. CONSULTA TODOS LOS USUARIOS DENTRO DE LA MISMA TABLA
        $result = $this->conexion->query($sql);              //* AQUI TOMA LA $CONEXION, QUE TIENE LOS DATOS DE LA VARIABLE $CON (QUERY ES PARA REALIZAR CONSULTAS)
        return $result->fetch_all(MYSQLI_ASSOC);                       //*FETCHALL Y EL CONJUNTO DE VALORES DENTRO DEL ARREGLO SON UNA FORMA DE MOSTRAR LOS VALORES EN COLUMNAS
    }


    //? (FUNCION DE TRAER TODA LA LISTA DE PRODUCTOS)
    public function getAllProductos()
    {
        $sql = "SELECT * FROM productos";
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    //? (FUNCION DE BUSCAR UN USUARIO MEDIANTE SU ID)
    public function getById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";             //* SELECCIONE TODOS LOS REGISTROS, TODOS LOS CAMPOS DE LA TABLA USUARIOS DONDE EL DI DE LA TABLA SEA IGUAL AL PARAMETRO QUE ESTOY ENVIANDO
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    //? (FUNCION DE BUSCAR UN PRODUCTO MEDIANTE SU ID)
    public function getByIdProductos($id)
    {
        $sql = "SELECT * FROM productos WHERE id = $id";
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    //? (FUNCION DE (INICIO DE SESION) VALIDAR ESTA ACCION)
    public function validarUsuarios($email, $password)                              //* ESTE ES EL METODO DEL MODELO QUE REVISA SI EL CORREO Y LA CONTRASENA ESTAN CORRECTOS
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";           //* SI EMAIL ES UN VARCHAR ENTONES $password DEBE ESTAR DEBTRO DE COMILLAS
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    //? (FUNCION DE BUSCAR USUARIOS MEDIANTE SU EMAIL)
    public function getByEmail($email)                              //* ESTE ES EL METODO DEL MODELO QUE REVISA SI EL CORREO ESTA CORRECTO
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";           //* SI EMAIL ES UN VARCHAR ENTONES DEBE ESTAR DENTRO DE COMILLAS
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    //? (FUNCION DE BUSCAR USUARIOS MEDIANTE SU EMAIL)
    public function getByNombreProductos($nombre)                              //* ESTE ES EL METODO DEL MODELO QUE REVISA SI EL CORREO ESTA CORRECTO
    {
        $sql = "SELECT * FROM productos WHERE nombre = '$nombre'";           //* SI EMAIL ES UN VARCHAR ENTONES DEBE ESTAR DENTRO DE COMILLAS
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    //? (FUNCION DE INSERTAR NUEVO USUARIO)
    public function insertar($email, $password, $nombre, $estado, $rol)
    {
        $sql = "INSERT
        INTO usuarios
        VALUES (null, '$email','$password','$nombre',$estado, $rol)";           //* SI EMAIL ES UN VARCHAR ENTONES DEBE ESTAR DENTRO DE COMILLAS
        $result = $this->conexion->query($sql);
        return $result;
    }


    //? (Formulario para ingreso de nuevos usuarios)
    public function formularioInsertarUsuarios($email, $password, $nombre)
    {
        $sql = "INSERT
        INTO usuarios
        VALUES (null,'$email','$password','$nombre',null,null)";
        $result = $this->conexion->query($sql);
        return $result;
    }


    //? (FUNCION DE INSERTAR NUEVO PRODUCTO)
    public function insertarProductos($nombre, $descripcion, $precio, $categoria)
    {
        $sql = "INSERT
        INTO productos
        VALUES (null, '$nombre', '$descripcion', $precio, $categoria)";
        $result = $this->conexion->query($sql);
        return $result;
    }


    //? (FUNCION DE ACTUALIZAR DATOS DEL USUARIO)
    public function actualizar($id, $email, $nombre, $estado, $rol)
    {
        $sql = "UPDATE usuarios
    SET email = '$email',
    nombre = '$nombre',
    estado = $estado,
    rol = $rol
    WHERE id = $id";

        $result = $this->conexion->query($sql);
        return $result;
    }

    //? (FUNCION DE ACTUALIZAR DATOS DEL producto)
    public function actualizarProductos($id, $nombre, $descripcion, $precio, $categoria)
    {
        $sql = "UPDATE productos
    SET nombre = '$nombre',
    descripcion = '$descripcion',
    precio= $precio,
    categoria = $categoria
    WHERE id = $id";

        $result = $this->conexion->query($sql);
        return $result;
    }


    //? (FUNCION DE ELIMINAR USUARIOS)
    public function eliminar($id)
    {
        $sql = "DELETE FROM  usuarios WHERE id = $id";
        $result = $this->conexion->query($sql);
        return $result;
    }


    //? (FUNCION DE ELIMINAR USUARIOS)
    public function eliminarProductos($id)
    {
        $sql = "DELETE FROM productos WHERE id = $id";
        $result = $this->conexion->query($sql);
        return $result;
    }


    public function redireccionamiento($rol)
    {
        $sql = "SELECT * FROM usuarios WHERE rol = '$rol'";
        $result = $this->conexion->query($sql);
        return $result;
    }










    //? (FUNCION DE ACTUALIZAR PASSWORD)  (BUSCAR SOLUCION)
    public function actualizarPassword($id, $password)
    {
        $sql = "UPDATE usuarios
    SET id= $id,
    WHERE password= '$password'";
        $result = $this->conexion->query($sql);
        return $result;
    }
}
