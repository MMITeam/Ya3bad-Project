<?php
class News_model extends MY_Model {
  
  protected $_table_name = 'news';
  protected $_order_by = 'sorder';
   
	// constructor
	function __construct()
	{
	  parent::__construct();
	}
}
