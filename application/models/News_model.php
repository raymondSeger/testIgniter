<?php
class News_model extends CI_Model {

	/*
	 * the database table:
	 * CREATE TABLE news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
	 * );
	 */

    public function __construct()
    {
            $this->load->database();
    }
}