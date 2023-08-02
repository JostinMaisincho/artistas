<?php
class Generos extends CI_Controller
{
  // constructor
    function __construct()
    {
      parent::__construct();
      $this->load->model("Genero");
    }
    // Renderizacuion de la vistaqu emuestra los desayunos
    public function Rock(){
      $data["lugaresRock"]= $this->Genero->obtenerTodosRock();
      $this->load->view('header');
      $this->load->view('generos/rock', $data);
      $this->load->view('footer');
    }
    public function Pop(){
      $data["lugaresPop"]= $this->Genero->obtenerTodosPop();
      $this->load->view('header');
      $this->load->view('generos/pop', $data);
      $this->load->view('footer');
    }
    public function Reggaeton(){
      $data["lugaresReggaeton"]= $this->Genero->obtenerTodosReggaeton();
      $this->load->view('header'); 
      $this->load->view('generos/reggaeton', $data);
      $this->load->view('footer');
    }
    public function Baladas(){
        $data["lugaresBaladas"]= $this->Genero->obtenerTodosBaladas();
        $this->load->view('header'); 
        $this->load->view('generos/baladas', $data);
        $this->load->view('footer');
      }
    public function unifi(){
      $data["lugares"]= $this->Genero->obtenerTodos();
      $this->load->view('header');
      $this->load->view('generos/unifi', $data);
      $this->load->view('footer');
    }
    
}//no borrar


 ?>
