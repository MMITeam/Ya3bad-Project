<?php
class Category_model extends MY_Model {
  
  protected $_table_name = 'category';
  protected $_order_by = 'sorder';
   
	// constructor
	function __construct()
	{
	  parent::__construct();
	}
}
