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


    public function getAllUsuarios()                          //*PUBLIC FUNCTION ES UN METODO EL CUAL PUEDE SER LLAMADO DENTRO DE LA FUNCION (EJE) USUARIOSMODELO.
    {
        $sql = "SELECT * FROM usuarios";                           //* ESTA ES UNA VARIABLE LOCAL DENTRO DE ESTA FUNCION. CONSULTA TODOS LOS USUARIOS DENTRO DE LA MISMA TABLA
        $result = $this->conexion->query($sql);              //* AQUI TOMA LA $CONEXION, QUE TIENE LOS DATOS DE LA VARIABLE $CON (QUERY ES PARA REALIZAR CONSULTAS)
        return $result->fetch_all(MYSQLI_ASSOC);                       //*FETCHALL Y EL CONJUNTO DE VALORES DENTRO DEL ARREGLO SON UNA FORMA DE MOSTRAR LOS VALORES EN COLUMNAS
    }


    public function getById($id)
{
    $sql = "SELECT * FROM usuarios WHERE id = $id";             //* SELECCIONE TODOS LOS REGISTROS, TODOS LOS CAMPOS DE LA TABLA USUARIOS DONDE EL DI DE LA TABLA SEA IGUAL AL PARAMETRO QUE ESTOY ENVIANDO
    $result = $this->conexion->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

}
