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

                echo $_SERVER['CI_ENV'];
        }

        public function handleUpload() {
                $this->load->helper(array('form', 'url'));

                $config['upload_path']          = 'D:/wamp/www/testIgniter/application/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '100';
                $config['max_width']            = '1024';
                $config['max_height']           = '768';

                $this->load->library('upload', $config); // load the upload library

                // try do_upload, if error, show the error, if not, show upload_success view
                if ( ! $this->upload->do_upload('userFileName')) {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('billy/upload_form', $error);
                }  else {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('billy/upload_success', $data);
                }
        }

        // test form data receive, use POSTMAN
        // THIS WILL NOT WORK IF CSRF IS ON, because you need CSRF data too
        // You can also enable CSRF while giving exclude some routes: user_guide/libraries/security.html
        public function handleFormData() {
                echo $this->input->post('key1');
                echo '<br />';
                echo $this->input->post('key2');

                echo '<br />';
                // get cookie
                echo $this->input->cookie('keyCookie');
        }

        /*
         * When a page is loaded, the session class will check to see if valid session cookie is sent by the user’s browser.
         * If a sessions cookie does not exist (or if it doesn’t match one stored on the server or has expired) a new session will be created and saved.
         * If a valid session does exist, its information will be updated. With each update, the session ID may be regenerated if configured to do so.
         * Session data is simply an array associated with a particular session ID (cookie).
         */
        public function testSession() {
                $this->load->library('session');

                print_r($this->session);

                // add data. Way 1
                $newdata = array(
                        'username'  => 'johndoe',
                        'email'     => 'johndoe@some-site.com',
                        'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);

                // add data. Way 2
                $this->session->set_userdata('some_name', 'some_value');

                session_write_close(); // once we no longer need to use session data, release the lock. DATA STILL EXIST, don't worry
                
                // to destroy session / log out
                // $this->session->sess_destroy();
                
                // you can also use Tempdata and Flashdata
                // /user_guide/libraries/sessions.html#tempdata
                // Tempdata last specified time, flashdata only lasted one time visit.

        }

        public function handleLanguage() {
                // load the language_file_lang file.
                // give parameter to use indonesian instead of english (because english is the default in application/config/config.php )
                $this->lang->load(array('language_file'), 'indonesian');

                // get the message with the key "the_message";
                echo $this->lang->line('the_message');;  
        }

        public function handlePagination() {
                $this->load->library('pagination');

                $config['base_url'] = 'http://example.com/index.php/test/page/';
                $config['total_rows'] = 200;
                $config['per_page'] = 20;

                $this->pagination->initialize($config);

                echo $this->pagination->create_links();
        }
        
}