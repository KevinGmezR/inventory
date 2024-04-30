<?php

session_start();

if(isset($_POST["iniciarSesion"])) 
    {


        if (!empty($_POST["user"]) and !empty($_POST["password"])) 
            {

                $user = $_POST["user"];
                $password = $_POST["password"];

                $sql = $conesion->query(" select * from inventory where usuario='$user' and contraseña='$password'");
                if ($datos=$sql->fetch_object())
                 {
                    echo "usuario ingresado Correctamente";
                     $_SESSION["id"]=$datos->ID;
                     $_SESSION["usuario"]=$datos->usuario;
                     $_SESSION["clave"]=$datos->contraseña;
                     $_SESSION["correo"]=$datos->correo;
                    header("location: inventario.php");
                }
                 else 
                 {
                    echo "Usuario no Existe";
                }
            }
    }
     
?>