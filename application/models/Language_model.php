<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Language_model extends MY_Model
{
  public $table = "languages";

  function __construct()
  {
    parent::__construct();
  }


  public function get_by_id($id = NULL)
  {
  	if(isset($id) && is_int($id))
  	{
  		$this->db->where('id',$id);
  		$query = $this->db->get('languages');
  		if($query->num_rows()==1)
  		{
  			return $query->row();
  		}
  	}
  	return FALSE;
  }

  public function create($data)
  {
  	if($data['default']=='1')
  	{
  		$this->db->where('default', '1');
  		$this->db->update('languages', array('default'=>'0'));
  	}
  	return $this->db->insert('languages',$data);
  }

}
