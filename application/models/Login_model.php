<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }
     //Sacar usuario y contraseña de la base de datos
     function get_user($usr, $pwd)
     {
          $this->db->select('*')->from('users')->where('username', $usr)->where('password', $pwd);
          $query = $this->db->get();
          return $query->num_rows();
     }
     function insertar($data)
     {
        $this->db->insert('users',$data);
     }
}?>
