<?php
class Instructores extends CI_Controller
{
 function __construct()
 {
   parent::__construct();

 }
 //funcion que renderiza la vista index
 public function index(){

   $this->load->view('header');
   $this->load->view('instructores/index');
   $this->load->view('footer');
 }
 //funcion que renderiza a la vista nuevo
 public function nuevo(){

 $this->load->view('header');
 $this->load->view('instructores/nuevo');
 $this->load->view('footer');
}
}


 ?>
