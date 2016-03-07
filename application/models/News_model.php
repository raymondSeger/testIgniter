<?php
class News_model extends CI_Model {

	/* 
     * http://www.codeigniter.com/user_guide/tutorial/news_section.html
     * 
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

    // This method will either get 1 news (if you provide argument), 
    // or it will get all the news (no argument)
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
}