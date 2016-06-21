<?php
  class News_model extends CI_Model {
      public function __construct()
      {
            $this->load->database();
      }
      //Mostrar todas las noticias en la pantalla principal
      public function get_news($slug = FALSE)
      {
              if ($slug === FALSE)
              {
                      $query = $this->db->get('news');
                      return $query->result_array();
              }

              $query = $this->db->get_where('news', array('slug' => $slug));
              return $query->row_array();
      }

      //Crear una noticia nueva
      public function set_news()
      {
          $this->load->helper('url');
          $autor = $this->session->userdata('user');
          $slug = url_title($this->input->post('title'), 'dash', TRUE);

          $data = array(
              'title' => $this->input->post('title'),
              'slug' => $slug,
              'autor' => $autor,
              'text' => $this->input->post('text')

          );
          return $this->db->insert('news', $data);
      }

      public function insertar($data)
      {
         $this->db->insert('users',$data);
       }
}
