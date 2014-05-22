<?php
class Users_model extends MY_Model {
  
  protected $_table_name = 'users';
  protected $_order_by = 'sorder';
   
	// constructor
	function __construct()
	{
	  parent::__construct();
	}
}
