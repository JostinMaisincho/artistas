<?php
  /**
   *
   */
  class Artista extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("cantante_2023_mj",$datos);
      //Inseccion sQL
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES LINEAS DE CODIGOS NUEVOS
    function obtenerTodos(){
      $listadoCantantes=$this->db->get("cantante_2023_mj");
      //VALIDAR PARA QUE NO DE ERRORES
      //SIEMPRE VALIDAR CON UN IF PARA QUE NO HAYA ERRORES
      if($listadoCantantes->num_rows()>0) { // SI HAY DATOS
        return $listadoCantantes->result();
      }else { // NO HAY DATOS
        return false;
      }
    }
    function borrar($idCantante_2023_MJ){
      //delete from instructor where id_ins=
      $this->db->where("idCantante_2023_MJ", $idCantante_2023_MJ);
      return $this->db->delete("cantante_2023_mj");
    }
     // funcion para consultar un alumno especifico
     function obtenerPorId($idCantante_2023_MJ){
      $this->db->where("idCantante_2023_MJ", $idCantante_2023_MJ);
      $artista=$this->db->get("cantante_2023_mj");
      if($artista->num_rows()>0){
        return $artista->row();
      }
      return false;
    }
    // funcion para actualizar un alumno
    function actualizar($idCantante_2023_MJ,$datos){
      $this->db->where("idCantante_2023_MJ",$idCantante_2023_MJ);
      return $this->db->update("cantante_2023_mj",$datos);
    }
  }//cierre de la funcion



 ?>
