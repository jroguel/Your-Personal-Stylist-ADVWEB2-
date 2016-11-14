<?php
class View_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_product($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('product');
                return $query->result_array();
        }

        $query = $this->db->get_where('product', array('slug' => $slug));
        return $query->row_array();
}
}