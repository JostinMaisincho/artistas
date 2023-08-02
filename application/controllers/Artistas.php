
<?php
    class Artistas extends CI_Controller
    {
        function __construct()
        {
          parent::__construct();
          //Cargar modelo
          $this->load->model('Artista');
        }

    public function index(){
      //LINEA DE CODIGO NUEVOS
      $data['artistas']=$this->Artista->obtenerTodos();
      //FIN
      $this->load->view('header');
      $this->load->view('artistas/index',$data);
      $this->load->view('footer');

    }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('artistas/nuevo');
      $this->load->view('footer');

    }
    public function guardar(){
      $datosNuevoArtista=array(
        "nombre_2023_MJ"=>$this->input->post('nombre_2023_MJ'),
        "apellido_2023_MJ"=>$this->input->post('apellido_2023_MJ'),
        "apodo_2023_MJ"=>$this->input->post('apodo_2023_MJ'),
        "costo_2023_MJ"=>$this->input->post('costo_2023_MJ'),
        "musica_2023_MJ"=>$this->input->post('musica_2023_MJ'),
        "fecha_2023_MJ"=>$this->input->post('fecha_2023_MJ'),
        "latitud_2023_MJ"=>$this->input->post('latitud_2023_MJ'),
        "longitud_2023_MJ"=>$this->input->post('longitud_2023_MJ')
      );

      if($this->Artista->insertar($datosNuevoArtista)){
        redirect('artistas/index');
      }else{
        echo "<h1>ERROR AL INSERTAR</h1>";
      }
    }
    //funcion para eliminar instructores
    public function eliminar($idCantante_2023_MJ){
      if ($this->Artista->borrar($idCantante_2023_MJ)) {//invocando el modelo
        redirect('artistas/index');
      } else {
        echo "ERROR AL BORRAR ;) ";
      }

    }
    //funcion para renderisar vista editar con el instructor
      public function editar ($idCantante_2023_MJ){
        $data["artistaEditar"]=$this->Artista->obtenerPorId($idCantante_2023_MJ);
        $this->load->view('header');
        $this->load->view('artistas/editar', $data);
        $this->load->view('footer');
      }
    public function procesarActualizacion(){
      $datosEditados=array(
        "nombre_2023_MJ"=>$this->input->post('nombre_2023_MJ'),
        "apellido_2023_MJ"=>$this->input->post('apellido_2023_MJ'),
        "apodo_2023_MJ"=>$this->input->post('apodo_2023_MJ'),
        "costo_2023_MJ"=>$this->input->post('costo_2023_MJ'),
        "musica_2023_MJ"=>$this->input->post('musica_2023_MJ'),
        "fecha_2023_MJ"=>$this->input->post('fecha_2023_MJ'),
        "latitud_2023_MJ"=>$this->input->post('latitud_2023_MJ'),
        "longitud_2023_MJ"=>$this->input->post('longitud_2023_MJ')
      );
      $idCantante_2023_MJ=$this->input->post("idCantante_2023_MJ");
      if($this->Artista->actualizar($idCantante_2023_MJ,$datosEditados)){
        redirect("artistas/index");
      }else{
        echo "error al actualizar :c";
    }
    }//cierre de la clase
  }//cierre de la clase

 ?>

