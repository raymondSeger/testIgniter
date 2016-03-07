<?php
class News extends CI_Controller {

        public function __construct()
        {
                // fetch the news_model model and use url_helpter 
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        // get all the news
        public function index()
        {
                $data['news']   = $this->news_model->get_news();
                $data['title']  = 'News archive';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        // view 1 news 
        public function view($slug = NULL) {
                $data['news_item'] = $this->news_model->get_news($slug);

                // if there is no news_item with that slug, show 404
                if (empty($data['news_item'])) {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }

        public function create() {
                // get the helper and libraries
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Create a news item';

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                // if the validation failed (aka, title and text POST data are empty, show the news/create view )
                // If the validation succeed, show news/success view
                if ($this->form_validation->run() === FALSE) {
                        $this->load->view('templates/header', $data);
                        $this->load->view('news/create');
                        $this->load->view('templates/footer');
                } else {
                        $this->news_model->set_news();
                        $this->load->view('news/success');
                }
        }
}