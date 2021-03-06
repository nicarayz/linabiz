<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends DataMapper {
	public $table = 'companies';
	protected $created_field = 'created_at';
	protected $updated_field = 'updated_at';
	public $has_one = array('currency');
	public $has_many = array('user', 'contact', 'fee', 'location', 'invoice');
	
	public function __construct($id = null, $db = null) {	
		$this->db_params = array(
				'dbdriver' => 'mysql',
				'pconnect' => true,
				'db_debug' => true,
				'cache_on' => false,
				'char_set' => 'utf8',
				'cachedir' => '',
				'dbcollat' => 'utf8_general_ci',
				'hostname' => 'localhost',
				'username' => 'root',
				'password' => '',
				'database' => $db,
				'prefix'   => ''
			);
		parent::__construct($id);
	}
}

/* End of file company.php */
/* Location: ./application/models/company.php */