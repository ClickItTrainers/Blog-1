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
          $this->load->helper('text');
          $this->load->helper('url');
          $autor = $this->session->userdata('user');
          $slug = url_title($this->input->post('title'), 'dash', TRUE);
          $slug = convert_accented_characters($slug);

          $data = array(
              'title' => $this->input->post('title', true),
              'slug' => $slug,
              'autor' => $autor,
              'text' => $this->input->post('text', true)
          );
          return $this->db->insert('news', $data);
      }

      public function set_comment()
      {

        $this->load->helper('url');

        $autor = $this->session->userdata('user');
        $data = array(
          'comment' => $this->input->post('comment', true),
          'autor' => $autor,
          'slug' => $this->input->post('slug', true)
        );
        return $this->db->insert('comments', $data);
      }

      public function get_comment($slug = FALSE)
      {
              if ($slug === FALSE)
              {
                      $query = $this->db->get('comments');
                      return $query->result_array();
              }
              $query = $this->db->get_where('comments', array('slug' => $slug));
              return $query->row_array();
      }
    
          function get_email($usr)
      {
          $this->db->select('mail')->from('users')->where('username', $usr);
          $query = $this->db->get();
          return $query;
      }
}
