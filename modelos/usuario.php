<?php

    class Usuario{
        public $id;
        public $nombre;
        public $apellido;
        public $celular;
        public $correo;
        public $usuario;
        public $password;
        public $rol;

        public function __construct($id,$nombre,$apellido,$celular,$correo,$usuario,$password,$rol){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->celular=$celular;
            $this->correo=$correo;
            $this->usuario=$usuario;
            $this->password=$password;
            $this->rol=$rol;
        }

        public static function listaus(){
            $listaus=[];
            $conn=DataBase::createobj();
            $sql=$conn->query("SELECT * FROM users");
            foreach($sql->fetchAll() as $usuariobd){
                $listaus[]=new Usuario($usuariobd['iduser'],$usuariobd['nombre'],$usuariobd['apellido'],$usuariobd['celular'],$usuariobd['correo'],$usuariobd['usuario'],$usuariobd['password'],$usuariobd['rol']);
            }
            return $listaus;
        }

        public static function crear($nombre,$apellido,$celular,$correo,$usuario,$password,$rol){
            $conn=DataBase::createobj();
            $sql=$conn->prepare("INSERT INTO users(nombre,apellido,celular,correo,usuario,password,rol) values(?,?,?,?,?,?,?)");
            $sql->execute(array($nombre,$apellido,$celular,$correo,$usuario,$password,$rol));
        }

        public static function eliminar($id2){
            $conn=DataBase::createobj();
            $sql=$conn->prepare("DELETE FROM users WHERE iduser=?");
            $sql->execute(array($id2));
        }

        public static function buscar($id2){
            $conn=DataBase::createobj();
            $sql=$conn->prepare("SELECT * FROM users WHERE iduser=?");
            $sql->execute(array($id2));
            $usuariobd=$sql->fetch();
            return new Usuario($usuariobd['iduser'],$usuariobd['nombre'],$usuariobd['apellido'],$usuariobd['celular'],$usuariobd['correo'],$usuariobd['usuario'],$usuariobd['password'],$usuariobd['rol']);
            
        }

        public static function buscarus($use){
            $conn=DataBase::createobj();
            $sql=$conn->prepare("SELECT * FROM users WHERE usuario=?");
            $sql->execute(array($use));
            if($userbd=$sql->fetch(PDO::FETCH_ASSOC)){
            return new Usuario($userbd['iduser'],$userbd['nombre'],$userbd['apellido'],$userbd['celular'],$userbd['correo'],$userbd['usuario'],$userbd['password'],$userbd['rol']);
            }
        }

        public static function actcontra($us2,$npass){
            $conn=DataBase::createobj();
            $sql=$conn->prepare("UPDATE users SET password=? WHERE usuario=?");
            $sql->execute(array($npass,$us2));
        }

        public static function actualizar($nombre,$apellido,$celular,$correo,$usuario,$password,$rol,$id){
            $conn=DataBase::createobj();
            $sql=$conn->prepare("UPDATE users SET nombre=?, apellido=?, celular=?, correo=?, usuario=?, password=?,rol=? WHERE iduser=? ");
            $sql->execute(array($nombre,$apellido,$celular,$correo,$usuario,$password,$rol,$id));
        }

        public static function validar($user){
           
            $conn=DataBase::createobj();
            $sql=$conn->prepare("SELECT * FROM users WHERE usuario=?");
            $sql->execute(array($user));
            if($usuariobd=$sql->fetch(PDO::FETCH_ASSOC)){
            return new Usuario($usuariobd['iduser'],$usuariobd['nombre'],$usuariobd['apellido'],$usuariobd['celular'],$usuariobd['correo'],$usuariobd['usuario'],$usuariobd['password'],$usuariobd['rol']);
            }
        }
    }
?>