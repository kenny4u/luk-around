<?php
class Admin_model extends CI_Model{

		function insert_event($data)
		{
			$this->db->insert('events',$data);
		}

		function insert_ad($data)
		{
			$this->db->insert('ads',$data);
		}
	
}