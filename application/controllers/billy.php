<?php

// Class names must start with an uppercase letter.
class Billy extends CI_Controller {

        // must call the parent's constructor
        // default method that will be called if the routing does not specify it will be index(), this class has no index() method
        public function __construct() {
                parent::__construct();
        }

        public function indexMethod()  {
                $data['title']  = 'Index Page For Billy';

                $this->load->view('templates/header', $data);
                $this->load->view('billy/index', $data);
                $this->load->view('templates/footer');
        }

        private function _echoResultForTestMethod($param1, $param2, $param3) {
                print_r($param1);
                echo "<br />";
                print_r($param2);
                echo "<br />";
                print_r($param3);
                echo "<br />";
        }

        public function testMethod($param1, $param2, $param3) {
                $this->_echoResultForTestMethod($param1, $param2, $param3);
        }
}