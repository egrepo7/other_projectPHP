<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Travel extends CI_Model {

	public function addUser($post)
	{
		$query = "INSERT INTO users (name, username, password, confirm_password, created_at) VALUES (?, ?, ?, ?, NOW())";
		$values = [$post['reg_name'], $post['reg_username'], $post['reg_password'], $post['reg_confirmpassword']];
		return $this->db->query($query, $values);

	}

	public function getUserinfo($login_info)
	{
		$query = "SELECT name FROM users WHERE username = ? AND password = ?";
		$values = [$login_info['login_username'], $login_info['login_password']];
		return $this->db->query($query, $values)->row_array();
	}
	
	// public function getSchedule()
	// {
	// 	$query = 
	// }
	


}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */