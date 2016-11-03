<?php

class Inicio extends CI_Controller
{
    function _construct()
    {
        parent::_construct();
    }
    function index()
    {
      $this->load->view('Inicioad');
    }
    function Ingreso()
    {
      $this->load->view('Ingreso');
    }
    function Formulario1()
    {
      $this->load->view('Formulario1');
    }
    function Formulario2()
    {
      $this->load->view('Formulario2');
    }
    function Formulario3()
    {
      $this->load->view('Formulario3');
    }
    function Formulario4()
    {
      $this->load->view('Formulario4');
    }
     function Formulario22()
    {
      $this->load->view('Formulario22');
    }
    function Formulario33()
    {
      $this->load->view('Formulario33');
    }
    function Formulario44()
    {
      $this->load->view('Formulario44');
    }
    
    function Iniciovi()
    {
      $this->load->view('Iniciovi');
    }
    function Iniciov()
    {
      $this->load->view('Iniciov');
    }
    function Formulario1_1()
    {
      $this->load->view('Formulario1_1');
    }
    function Adopcion()
    {
      $this->load->view('Adopcion');
    }
    function Donacion()
    {
      $this->load->view('Donacion');
    }
    function Tabla()
    {
      $this->load->view('Tabla');
    }
    function Tabla2()
    {
      $this->load->view('Tabla2');
    }
    function Tablaa()
    {
      $this->load->view('Tablaa');
    }
    function Eliminar()
    {
      $this->load->view('Eliminar');
    }
    function Eliminar2()
    {
      $this->load->view('Eliminar2');
    }
   function login($idioma=null)
    {
      function reporte()
    {
      $this->load->view('reporte');
    }
         
      //   $this->config->set_item('language', 'spanish');      //   Setear dinámicamente el idioma que deseamos que ejecute nuestra aplicación
      if(!isset($_POST['maillogin'])){   //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
         
         $this->load->view('login');      //   Por lo tanto le presentamos la pantalla del formulario de ingreso.
      }
      else{                        //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
         $this->form_validation->set_rules('maillogin','e-mail','required|valid_email');      //   Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
         $this->form_validation->set_rules('passwordlogin','password','required');
         if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
            
            $this->load->view('login');                     //   En caso que no, volvemos a presentar la pantalla de login
         }
         else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
            $this->load->model('usuarios_model');
            $ExisteUsuarioyPassoword=$this->usuarios_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
              $this->load->view('Iniciov');
               //echo "A ingresado correctamente<br><br><a href=''>Continuar</a>";   //   Si el usuario ingresó datos de acceso válido, imprimos un mensaje de validación exitosa en pantalla
            }
            else{   //   Si no logró validar
               $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
               $this->load->view('login',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
            }
         }
      }
   }

}

?>  