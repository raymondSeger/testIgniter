<?php
class Billy extends CI_Controller {

        public function __construct() {
                // fetch the news_model model and use url_helpter 
                parent::__construct();
        }

        // get all the news
        public function indexMethod()  {
                $data['title']  = 'Index Page For Billy';

                $this->load->view('templates/header', $data);
                $this->load->view('billy/index', $data);
                $this->load->view('templates/footer');
        }
}