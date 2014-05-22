<?php
class Media_model extends MY_Model {
  
  protected $_table_name = 'media';
  protected $_order_by = 'sorder';
   
	// constructor
	function __construct()
	{
	  parent::__construct();
	}
}
