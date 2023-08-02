<?php
/*MODEL DE LA TABLA Candidato*/
class Genero extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
//Funcion para consultar Ubicaciones
  function obtenerTodos()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoC=$this->db->get("cantante_2023_mj");
    //Se agrega una condicional, una validacion con if.
    if ($listadoC->num_rows()>0)
    {
      return $listadoC->result();
    }
    return false;
  }
  function obtenerTodosRock()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('musica_2023_MJ','Rock')->get("cantante_2023_mj");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }
  function obtenerTodosPop()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('musica_2023_MJ','Pop')->get("cantante_2023_mj");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }
  function obtenerTodosReggaeton()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('musica_2023_MJ','Reggaeton')->get("cantante_2023_mj");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }
  function obtenerTodosBaladas()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('musica_2023_MJ','Baladas')->get("cantante_2023_mj");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }
}
?>
