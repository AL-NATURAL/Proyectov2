<?php
include_once("modelos/usuario.php");
include_once("conexion.php");
include_once("modelos/infracciones.php");


class ControladorUs{

    public function inicio(){
        include_once("vistas/plantilla.php");
    }

    /*public function infraccion(){
        
        print_r($infracciones=Infraccion::VerInfracciones());
        include_once("vistas/infraccion.php");
    }*/
    public function usinicio(){
        include_once("vistas/usinicio.php");
    }
    public function productos(){

        include_once("vistas/productos.php");
    }

    public function login(){
        include_once("vistas/login.php");
    }

    public function listaus(){
        $usuarios=Usuario::listaus();
        include_once("vistas/listaus.php");
    }

    public function cerrar(){
        include_once("vistas/cerrarse.php");
    }

    public function crearad(){
        if(isset($_POST) and $_POST['nombre']!=""){  

            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $celular=$_POST['celular'];
            $correo=$_POST['email'];
            $usuario=$_POST['usuario'];
            $password=$_POST['password'];
            $rol=$_POST['rol'];
        
            if(strlen($password)>7){
                //$outputString = preg_replace('/[^0-9]/', '', $password);  
                // echo("The extracted numbers are: $outputString \n"); 
                if(preg_replace('/[^0-9]/', '', $password)){
                    //echo "la contraseña tiene numberrs";
                    if(preg_replace('/[^A-Z]/','',$password)){
                        $out=preg_replace('/[^A-Z]/','',$password);
                        //echo "la contraseña tiene Mayus: $out";
                        if(preg_replace('/[A-z0-9-]/','',$password)){
                            $password2=hash('sha1',$password);
                            //$password2 = password_hash($password,PASSWORD_DEFAULT,['cost'=> 4]);

                            Usuario::crear($nombre,$apellido,$celular,$correo,$usuario,$password2,$rol);
        
                            header("Location:?controlador=us&accion=listaus");
                        }else {
                            echo "<script>alert('La contraseña debe contener caracteres especiales')</script>";
                        }
                    }else {
                        echo "<script>alert('La contraseña debe contener caracteres en mayuscula')</script>";
                    }
                }else{
                    echo "<script>alert('La contraseña debe contener al menos un digito')</script>";
                }
            }else{
                echo "la contraseña debe tener minimo 8 caracteres";
            }
         }
         include_once("vistas/crearad.php");
    }

    public function crearus(){
            
         if(isset($_POST) and $_POST['nombre']!=""){  

            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $celular=$_POST['celular'];
            $correo=$_POST['email'];
            $usuario=$_POST['usuario'];
            $password=$_POST['password'];
            $rol=$_POST['rol'];
        
            if(strlen($password)>7){
                if(preg_replace('/[^0-9]/', '', $password)){
                    if(preg_replace('/[^A-Z]/','',$password)){
                        if(preg_replace('/[A-z0-9-]/','',$password)){
                            $password2=hash('sha1',$password);
                            Usuario::crear($nombre,$apellido,$celular,$correo,$usuario,$password2,$rol);
                           
                            header("Location:?controlador=us&accion=loguer");
                        }else{
                           echo "<script>alert('La contraseña debe contener caracteres especiales')</script>";
                        }
                    }else {
                        echo "<script>alert('La contraseña debe contener caracteres en mayuscula')</script>";
                    }
                }else{
                    echo "<script>alert('La contraseña debe contener al menos un digito')</script>";
                }
            }else{
                echo "La contraseña debe tener minimo 8 caracteres";
            }
         }
         include_once("vistas/uscrear.php");
    }


    public function loguer(){
        if($_POST){
            $user=$_POST['txtuser'];
            $pass=$_POST['txtpassword'];
            if($userbd=Usuario::validar($user)){
                //$user=$usuariobd->usuario;
                $comon=$userbd->password;
                $usbd=$userbd->usuario;

                $pass=hash('sha1',$pass);
                if($pass==$comon){
                    session_start();
                    //$idus=$usuariobd->iduser;
                    $_SESSION['us']=$userbd->usuario;
                    $_SESSION['nombre']=$userbd->nombre;
                    $_SESSION['seRol']=$userbd->rol;
                    
                    header("Location:?controlador=us&accion=listaus");
                } else{
                    $motivo="contraseña incorrecta";
                   $infrac=Infraccion::NInfraccion($user,$motivo);
                echo "<script>alert('Credenciales incorrectas')</script>";
                }
            }else{
                   $motivo="Usuario inexistente";
                   $infrac=Infraccion::NInfraccion($user,$motivo);
                echo "<script>alert('Usuario no encontrado')</script>";
                }
            }
        include_once("vistas/login.php");

    }

    public function cambio(){
        $usuarioget=$_GET['user'];
         //echo $usuarioget;
         
        $userbd=Usuario::buscarus($usuarioget);
        $cn=$userbd->password;
        if($_POST){
            $pass=$_POST['actual'];
            $npass=$_POST['nueva'];
            $us=$_POST['user'];
            $pass2=hash('sha1',$pass);
            $npass2=hash('sha1',$npass);
            if($npass2 == $cn){
                echo "<script>alert('La contraseña nueva no debe ser igual a la anterior')</script>";
            }else if($pass2==$cn){

                    if(strlen($npass)>7){
                        if(preg_replace('/[^0-9]/', '', $npass)){
                            if(preg_replace('/[^A-Z]/','',$npass)){
                                if(preg_replace('/[A-z0-9-]/','',$npass)){
                                    Usuario::actcontra($us,$npass2);
                                    //echo "<script>alert('Por favor ingrese nuevamente')</script>";
                                    header("Location:?controlador=us&accion=cerrar");
                                }else{
                                    echo "<script>alert('La contraseña debe contener caracteres especiales')</script>";
                                }
                            }else {
                                echo "<script>alert('La contraseña debe contener caracteres en mayusculas')</script>";
                            }
                        }else{
                            echo "<script>alert('La contraseña debe contener números')</script>";
                        }
                    }else{
                        echo "<script>alert('La contraseña debe contener al menos 8 caracteres')</script>";
                    }
                 }else{
                     echo "<script>alert('La contraseña no coincide con el usuario')</script>";   
                 }
            }   
           
        include_once("vistas/changepass.php");
    }


    public function editar(){
        $id = $_GET['id'];
        $edusuario=Usuario::buscar($id);
        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $celular=$_POST['celular'];
            $correo=$_POST['email'];
            $usuario=$_POST['usuario'];
            $password=$_POST['password'];
            $rol=$_POST['rol'];
            Usuario::actualizar($nombre,$apellido,$celular,$correo,$usuario,$password,$rol,$id);
            header("Location:?controlador=us&accion=listaus");
        }
        include_once("vistas/useditar.php");
    }

    public function useliminar(){
        print_r($_GET);

        $id = $_GET['id'];

        Usuario::eliminar($id);

        header("Location:?controlador=us&accion=listaus");
    }

}
        

 
?>