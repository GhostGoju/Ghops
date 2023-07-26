<?php


class mysql
{
    public $conexion;
    public function conectar()
    {
        // Create connection
        // dentro de esta estancia $this gusrda todo dentro de la variable conexion
        $this->conexion = new mysqli("localhost", "root", "Qwe.proyectoSena", "bdproyectosena");
        // Check connection
        if ($this->conexion->connect_error) {
            die("Connection failed: " . $this->conexion->connect_error);
        }
        // echo "Connected successfully";
        return $this->conexion;
    }
}
