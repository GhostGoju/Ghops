<?php

// LA CLASS ES EL PLANO DE UN FUTURO OBJETO
class usuarios_modelo
{
    public $conexion;
    public function __construct()
    {
        $con = new mysql();
        $this->conexion = $con->conectar();
    }

    public function getAllUsuarios()
    {
        $sql = "SELECT * FROM usuarios";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id ";
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
