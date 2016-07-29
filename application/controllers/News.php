<?php  
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                $this->load->helper('form');
                $this->load->library('form_validation');
        }
        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
                $this->load->helper(array('form'));
        }

        public function view($slug = NULL)
        {
                $data['comments'] = $this->news_model->get_comment();
                $data['news_item'] = $this->news_model->get_news($slug);
                $data['comments_item'] = $this->news_model->get_comment($slug);
                if (empty($data['news_item']))
                {
                        show_404();
                }
                $data['title'] = $data['news_item']['title'];
                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
      }


      public function create()
      {
          $this->load->helper('form');
          $this->load->library('form_validation');
          $data['title'] = 'Crear una noticia nueva';
          $this->form_validation->set_rules('title', 'Title', 'required');
          $this->form_validation->set_rules('text', 'Text', 'required');
          if ($this->form_validation->run() === FALSE)
          {
              $this->load->view('templates/header', $data);
              $this->load->view('news/create');
              $this->load->view('templates/footer');
          }
          else
          {
              $this->news_model->set_news();
              $this->load->view('templates/header', $data);
              $this->load->view('news/success');
              $this->load->view('templates/footer');
          }
        }

        public function comment()
        {
               
          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->form_validation->set_rules('comment', 'Comment', 'required');      
          $user = $this->session->userdata('user');
          $email = $this->news_model->get_email($user);
          if ($this->form_validation->run() === FALSE)
          {
              $this->load->view('templates/header');
              $this->load->view(base_url().'news');
              $this->load->view('templates/footer');
          }
          else
          {
              $this->my_mailgun->send($user, $email);
              $this->news_model->set_comment();
              $this->load->view('templates/header');
              $this->load->view('news/success');
              $this->load->view('templates/footer');
          }
        }
}
?>
