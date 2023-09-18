<?php

class usuariosControl
{
    public $modelo;                          //* ATRIBUTO PROPIO DE LA CLASE CONTROL, LA CUAL VA A LLAMAR EL MODELO DEL USUARIO.
    public function __construct()                   //* METODO QUE SE DISPARA CUANDO SE CREA UN OBJETO
    {
        $this->modelo = new usuariosModelo();            //* ESTE CONSTRUCTOR SE DISPARA Y TRAE TODO LO QUE TIENE LA CLASE USUAIROS MODELO.
    }


    //* AQUI ES DONDE VAN LOS REQUERIMIENTOS DEL USUARIO EJEMPLO (AUTENTICAR, RECUPERAR CONTRASENA, REGISTRAR PRODUCTOS)


    //? (FUNCION DE (INICIO DE SESION) VALIDAR ESTA ACCION)
    public function autenticar($email, $password)
    {
        if (
            !empty($email) && $email != "" && $email != null &&                       //* SI NO ESTA BASIO EMAIL Y ADEMAS EMAIL ES DIFERENTE DE BASIO ES DIFERENTE DE NULL
            !empty($password) && $password != "" && $password != null
        ) {                                                                   //* SI TODAS LAS CONDICIONES DE ARRIBA SE CUMPLEN ENTONCES  $RESULT TRAE EL ARREGLO QUE TIENE VALIDARUSUARIOS
            $result = $this->modelo->validarUsuarios($email, md5($password));
            if (is_array($result) && count($result) > 0) {                             //*AQUI SE PREGUNTA SI $RESULT TRAE UNA CADENA DE TEXTO Y MAS DE 0 REGISTROS
                return $result;
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }


    //? (FUNCION DE TRAER TODA LA LISTA DE USUARIOS)
    public function listarUsurios()
    {
        return $this->modelo->getAllUsuarios();
    }


    //? (FUNCION DE TRAER TODA LA LISTA DE PRODUCTOS)
    public function listarProductos()
    {
        return $this->modelo->getAllProductos();
    }


    //? (FUNCION DE BUSCAR UN USUARIO MEDIANTE SU ID)
    public function buscarUsuarios($id)
    {
        if (!empty($id) && $id != "" && $id != null) {
            $result = $this->modelo->getById($id);
            if (is_array($result) && count($result) > 0) {
                return $result;
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }


    //? (FUNCION DE BUSCAR UN PRODUCTO MEDIANTE SU ID)
    public function buscarProductos($id)
    {
        if (!empty($id) && $id != "" && $id != null) {
            $result = $this->modelo->getByIdProductos($id);
            if (is_array($result) && count($result) > 0) {
                return $result;
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }


    //? (FUNCION DE INSERTAR NUEVO USUARIO)
    public function registrar($email, $password, $nombre, $estado, $rol)
    {
        if (
            !empty($email) && $email != "" && $email != null &&
            !empty($password) && $password != "" && $password != null &&
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($estado) && $estado != "" && $estado != null &&
            !empty($rol) && $rol != "" && $rol != null
        ) {
            $result = $this->modelo->getByEmail($email);                                          //* AQUI SE GARNTIZA DE QUE EL EMAIL NO SE REPITA
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->insertar($email, md5($password), $nombre, $estado, $rol);
                if ($result) {
                    return 3;
                }           //*USUARIO CREADO
                else {
                    return 2;
                }               //* USUARIO NO CREADO
            } else {
                return 1;
            }            //*USUARIO YA EXISTENTE CON EL MISMO EMAIL
        } else {
            return 0;
        }                //* FALTAN DATOS
    }


    //? (FORMULARIO PARA USUARIOS NUEVOS)
    public function formularioNuevosUsuarios($nombre, $email, $password)
    {
        if (
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($email) && $email != "" && $email != null &&
            !empty($password) && $password != "" && $password != null
        ) {
            $result = $this->modelo->getByEmail($email);                                          //* AQUI SE GARNTIZA DE QUE EL EMAIL NO SE REPITA
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->formularioInsertarUsuarios($email, md5($password), $nombre);
                if ($result) {
                    return 3;
                }           //*USUARIO CREADO
                else {
                    return 2;
                }               //* USUARIO NO CREADO
            } else {
                return 1;
            }            //*USUARIO YA EXISTENTE CON EL MISMO EMAIL
        } else {
            return 0;
        }                //* FALTAN DATOS
    }


    //? (FUNCION DE INSERTAR NUEVO PRODUCTO)
    public function registrarProductos($nombre, $descripcion, $precio, $categoria, $imagen)
    {
        if (
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($descripcion) && $descripcion != "" && $descripcion != null &&
            !empty($precio) && $precio != "" && $precio != null &&
            !empty($categoria) && $categoria != "" && $categoria != null &&
            !empty($imagen) && $imagen != "" && $imagen != null
        ) {
            $result = $this->modelo->getByNombreProductos($nombre);
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->insertarProductos($nombre, $descripcion, $precio, $categoria, $imagen);
                if ($result) {
                    return 3;
                }           //*PREDUCTO CREADO
                else {
                    return 2;
                }               //* PRODUCTO NO CREADO
            } else {
                return 1;
            }            //*PRODUCTO YA EXISTENTE CON EL MISMO ID
        } else {
            return 0;
        }                //* FALTAN DATOS
    }


    //? (CASO DE USO DE ACTUALIZAR USUARIOS)
    public function modificarUsuarios($id, $email, $nombre, $estado, $rol)
    {
        if (
            !empty($id) && $id != "" && $id != null &&
            !empty($email) && $email != "" && $email != null &&
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($estado) && $estado != "" && $estado != null &&
            !empty($rol) && $rol != "" && $rol != null
        ) {
            $result = $this->modelo->getById($id);                                          //* AQUI SE GARNTIZA DE QUE EL EMAIL NO SE REPITA
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizar($id, $email, $nombre, $estado, $rol);
                if ($result) {
                    return 3;
                }           //*USUARIO ACTUALIZADO
                else {
                    return 2;
                }               //* USUARIO NO ACTUALIZADO
            } else {
                return 1;
            }            //*USUARIO NO EXISTENTE CON ESE ID
        } else {
            return 0;
        }                //* FALTAN DATOS
    }


    //? (CASO DE USO DE ACTUALIZAR USUARIOS)
    public function modificarProductos($id, $nombre, $descripcion, $precio, $categoria)
    {
        if (
            !empty($id) && $id != "" && $id != null &&
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($descripcion) && $descripcion != "" && $descripcion != null &&
            !empty($precio) && $precio != "" && $precio != null &&
            !empty($categoria) && $categoria != "" && $categoria != null
        ) {
            $result = $this->modelo->getByIdProductos($id);                                          //* AQUI SE GARNTIZA DE QUE EL EMAIL NO SE REPITA
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizarProductos($id, $nombre, $descripcion, $precio, $categoria);
                if ($result) {
                    return 3;
                }           //*USUARIO ACTUALIZADO
                else {
                    return 2;
                }               //* USUARIO NO ACTUALIZADO
            } else {
                return 1;
            }            //*USUARIO NO EXISTENTE CON ESE ID
        } else {
            return 0;
        }                //* FALTAN DATOS
    }


    //? (ELIMINAR USUARIOS DE LA BASE DE DATOS)
    public function eliminar($id)
    {
        if (
            !empty($id) && $id != "" && $id != null
        ) {
            $result = $this->modelo->getById($id);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->eliminar($id);
                if ($result) {
                    return 3;
                } // Usuario eliminado
                else {
                    return 2;
                } //Usuario no eliminado
            } else {
                return 1;
            } //Usuario No existe con ese Id
        } else {
            return  0;
        } //Falta Datos
    }


    //? (ELIMINAR USUARIOS DE LA BASE DE DATOS)
    public function eliminarProductos($id)
    {
        if (
            !empty($id) && $id != "" && $id != null
        ) {
            $result = $this->modelo->getByIdProductos($id);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->eliminarProductos($id);
                if ($result) {
                    return 3;
                } // Usuario eliminado
                else {
                    return 2;
                } //Usuario no eliminado
            } else {
                return 1;
            } //Usuario No existe con ese Id
        } else {
            return  0;
        } //Falta Datos
    }


    //? (REDIRECCIONAR A LOS UUARIOS DEPENDINDO DE SU ROL)
    public function redireccionarUsuarios($rol)
    {
        if ($rol == 1) {
            $result = $this->modelo->redireccionamiento($rol);
            if ($result !== null) {
                return $result; // Devolver el rol si existe
            } else {
                return 1; // Devolver 1 si el rol no existe en la base de datos
            }
        } else {
            return 0; // Devolver 0 si el rol no es igual a 1
        }
    }




    //? (ACTUALIZAR PASSWORD)    (BUSCAR SOLUCION)
    public function updatePassword($id, $password)
    {
        if (
            !empty($id) && $id != "" && $id != null &&
            !empty($password) && $password != "" && $password != null
        ) {
            $result = $this->modelo->getById($id);                                          //* AQUI SE GARNTIZA DE QUE EL EMAIL NO SE REPITA
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizarPassword($id, $password);
                if ($result) {
                    return 3;
                }           //*PASSWORD ACTUALIZADA
                else {
                    return 2;
                }               //* PASSWORD NO ACTUALIZADA
            } else {
                return 1;
            }            //*USUARIO NO EXISTENTE CON ESE ID
        } else {
            return 0;
        }                //* FALTAN DATOS
    }
}
