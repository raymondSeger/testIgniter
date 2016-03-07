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

        public function testCommonFunction() {
                // i was testing all the functions in 
                // http://www.codeigniter.com/user_guide/general/common_functions.html
                var_dump( is_cli() );
                
        }

        public function testPassingDataToView() {
                $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

                $this->load->view('billy/testPassingData', $data);
        }

        public function testGetDataFromModel(){
                $this->load->model('Billy_model');
                print_r( $this->Billy_model->get_all_items() );
        }

        public function testingHelpers(){
                // testing all the helpers
                // http://www.codeigniter.com/user_guide/helpers/index.html
                
                $this->load->helper( array('array', 'cookie', 'date', 'directory', 'download', 'inflector', 'url') );
                
                // will not work if it is not view
                $this->output->cache(2);

                $data['title']  = 'Index Page 2 For Billy';

                $this->load->view('templates/header', $data);
                $this->load->view('billy/index', $data);
                $this->load->view('templates/footer');
        }
}