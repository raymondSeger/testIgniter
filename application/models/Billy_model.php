<?php
class Billy_model extends CI_Model {

	/* 
     * Test creating model:
     * http://www.codeigniter.com/user_guide/general/models.html
     * 
 	 * the database table:
	 * CREATE TABLE billy_items (
        id int(11) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        age int NOT NULL,
        PRIMARY KEY (id)
	 * );
	 */

    public function __construct()
    {
            $this->load->database();
    }

    public function get_all_items(){
        $query = $this->db->get('billy_items');
        return $query->result_array();
    }

}