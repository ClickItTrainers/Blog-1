<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->library('form_validation');
          //Cargar el modelo login
          $this->load->model('Login_model');
     }
     public function index()
     {
          //Obtener los valores de los campos de texto
          $username = $this->input->post("txt_username", true);
          $password = $this->input->post("txt_password", true);

          //Validaciones de formulario
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //Si falla la validacion, regresa a la misma ventana
               $this->load->view('templates/header');
               $this->load->view('news/login');
               $this->load->view('templates/footer');
          }
          else
          {
                    //Ver si hay coincidencias en la base de datos
                    $usr_result = $this->Login_model->get_user($username, $password);
                    if ($usr_result > 0)
                    {
                         //Establecer las variables de sesion
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         $this->session->set_userdata('user', $username);
                         redirect('news');
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Usuario  y contraseña incorrectos</div>');
                         redirect('login/index');
                    }
          }
     }

     public function salir()
     {
       $this->session->unset_userdata('user');
       $this->session->sess_destroy();
       redirect ('news');
     }

     public function registro()
     {
       $this->load->library('form_validation');
       $this->load-> helper('form');
       $this->form_validation->set_rules('username'    ,'Username'    ,'required');
       $this->form_validation->set_rules('password'    ,'Password'    ,'required');
       $this->form_validation->set_rules('mail'        ,'mail'         ,'required');

       if( $this->form_validation->run() === FALSE)
       {
         //error
         $data['titulo']= "Registro de usuario nuevo";
         $this->load->view('templates/header',$data);
         $this->load->view('news/registro');
         $this->load->view('templates/footer');
       }
       else
       {
         //bien
         //$var = $this->input->post('password', true);
         //$pass = password_hash($var, PASSWORD_BCRYPT);
         $data = array(
         'username' => $this->input->post('username', true),
         'password' => $this->input->post('password', true),
         'mail'   => $this->input->post('mail'));
         $this->Login_model->insertar($data);
         //redirigir a inicio de sesion o login
         redirect(base_url().'login');
       }
     }    
}
