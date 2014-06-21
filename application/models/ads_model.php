<?php
class Ads_model extends MY_ModelHOME {
  
  protected $_table_name = 'ads'; 
   
	// constructor
	function __construct()
	{
	  parent::__construct();
	}
	
	public function getByLocation($Location)
	{
		return $this->get_by(array('pos'=>$Location));
	}
}
