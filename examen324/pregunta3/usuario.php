<?php
require("conexion.php");
class Usuario extends Conexion{
           
            public function __construct(){
                $this->conexion = new Conexion();
                $this->conexion = $this->conexion->connect();
    
            }
           
            public function getUsuarios(){
                $sql="SELECT * FROM NEGOCIO ORDER BY ESTADO ,NOMBRE";
                $execute= $this->conexion->query($sql);
                $request = $execute->fetchall(PDO::FETCH_ASSOC);
                return $request;
    
            }
            public function verificarUsuario($usuario,$password){
                $sql="SELECT count(*) as num FROM ACCESO WHERE usuario='$usuario' and password='$password'";
                $execute=$this->conexion->query($sql);
                $request = $execute->fetchall(PDO::FETCH_ASSOC);
                return $request[0]['num'];

            }
            public function obtenerNotas($usuario){
                $sql="SELECT * FROM INSCRIPCCION XI,ACCESO XA WHERE XI.ci =XA.CI and xa.usuario='$usuario'";
                $execute=$this->conexion->query($sql);
                $request = $execute->fetchall(PDO::FETCH_ASSOC);
                return $request;
            }
           



    }
    ?>