<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = '<center><h1>Blog</h1></center>';
                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
                $this->load->helper(array('form'));
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }
                $data['title'] = $data['news_item']['title'];
                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
                $route['news/(:any)'] = 'news/view/$1';
                $route['news'] = 'news';
                $route['(:any)'] = 'pages/view/$1';
                $route['default_controller'] = 'pages/view';
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

              $this->load->view('news/success');
              $this->load->view('templates/header', $data);;
              $this->load->view('templates/footer');
          }
      }


}
