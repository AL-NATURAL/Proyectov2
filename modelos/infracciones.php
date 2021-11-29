<?php
    class Infraccion{

        public $idinfraccion;
        public $infraccionus;
        public $motivo;
        public $inffecha;
        

        public function __construct($idinfraccion,$infraccionus,$motivo,$inffecha){
            $this->idinfraccion=$idinfraccion;
            $this->InfraccionUs=$infraccionus;
            $this->motivo=$motivo;
            $this->InfFecha=$inffecha;
            
        }

        public static function VerInfracciones(){
            $infracciones=[];
            $conn=DataBase::createobj();
            $sql=$conn->query("SELECT * FROM infracciones");
            foreach($sql->fetchAll() as $infraccionbd){
                $infracciones=new Infraccion($infraccionbd['idinfraccion'],$infraccionbd['InfraccionUs'],$infraccionbd['motivo'],$infraccionbd['InfFecha']);
            }
            return $infracciones;
        }

        public static function NInfraccion($infuser,$motivo){
            $conn=DataBase::createobj();
            $sql=$conn->prepare("INSERT INTO infracciones(InfraccionUs,motivo,InfFecha) values(?,?,now())");
            $sql->execute(array($infuser,$motivo));
        }
    }
?>