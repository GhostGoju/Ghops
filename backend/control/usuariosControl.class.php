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
            !empty($email) && $email != "" && $email != null &&
            !empty($password) && $password != "" && $password != null
        ) {
            $result = $this->modelo->validarUsuarios($email, md5($password));
            if (is_array($result) && count($result) > 0) {
                $_SESSION['email'] = $result['email'];
                $_SESSION['rol'] = $result['rol'];
                $_SESSION['nombre'] = $result['nombre'];
                $_SESSION['estado'] = $result['estado'];
                return $result;
            } else {
                return 1;      //* USUARIOS YA EXISTENTE CON EL MISMO CORREO
            }
        } else {
            return 0;  //* FALTAN DATOS
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


    //? (FUNCION DE TRAER TODA LA LISTA DE CATEGORIAS)
    public function listarCategorias()
    {
        return $this->modelo->getAllCategorias();
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


    //? (FUNCION DE BUSCAR UN CATEGORIAS MEDIANTE SU ID)
    public function buscarCategorias($id)
    {
        if (!empty($id) && $id != "" && $id != null) {
            $result = $this->modelo->getByIdCategorias($id);
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
    public function formularioNuevosUsuarios($nombre, $email, $password, $rol, $estado)
    {
        if (
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($email) && $email != "" && $email != null &&
            !empty($password) && $password != "" && $password != null &&
            !empty($rol) && $rol != "" && $rol != null &&
            !empty($estado) && $estado != "" && $estado != null
        ) {
            $result = $this->modelo->getByEmail($email);                                          //* AQUI SE GARNTIZA DE QUE EL EMAIL NO SE REPITA
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->formularioInsertarUsuarios($nombre, $email, md5($password), $rol, $estado);
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


    //? (FUNCION DE INSERTAR NUEVA CATEGORIA)
    public function registrarCategorias($nombre, $descripcion)
    {
        if (
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($descripcion) && $descripcion != "" && $descripcion != null
        ) {
            $result = $this->modelo->getByNombreCategorias($nombre);
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->insertarCategorias($nombre, $descripcion);
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
    public function modificarProductos($id, $nombre, $descripcion, $precio, $categoria, $imagen)
    {
        if (
            !empty($id) && $id != "" && $id != null &&
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($descripcion) && $descripcion != "" && $descripcion != null &&
            !empty($precio) && $precio != "" && $precio != null &&
            !empty($categoria) && $categoria != "" && $categoria != null &&
            !empty($imagen) && $imagen != "" && $imagen != null
        ) {
            $result = $this->modelo->getByIdProductos($id);                                          //* AQUI SE GARNTIZA DE QUE EL EMAIL NO SE REPITA
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizarProductos($id, $nombre, $descripcion, $precio, $categoria, $imagen);
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


    //? (CASO DE USO DE ACTUALIZAR CATEGORIAS)
    public function modificarCategorias($id, $nombre, $descripcion)
    {
        if (
            !empty($id) && $id != "" && $id != null &&
            !empty($nombre) && $nombre != "" && $nombre != null &&
            !empty($descripcion) && $descripcion != "" && $descripcion != null
        ) {
            $result = $this->modelo->getByIdCategorias($id);                                          //* AQUI SE GARNTIZA DE QUE EL EMAIL NO SE REPITA
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizarCategorias($id, $nombre, $descripcion);
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


    //? (ELIMINAR CATEGORIAS DE LA BASE DE DATOS)
    public function eliminarCategorias($id)
    {
        if (
            !empty($id) && $id != "" && $id != null
        ) {
            $result = $this->modelo->getByIdCategorias($id);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->eliminarCategorias($id);
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
}
