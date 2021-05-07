<?php

class User_Model extends CI_Model
{
	public function getUser($username = false)
	{
		if ($username == false) {
			$this->db->select('*');
			$this->db->from('user');
			$this->db->join('role', 'role.role_id = user.role_id');
			$this->db->order_by('user.role_id', 'ASC');
			return $this->db->get()->result_array();
		}
		$this->db->join('role', 'role.role_id = user.role_id');
		return $this->db->get_where('user', ['username' => $username])->row_array();
	}
	public function getUserById($user_id)
	{
		$this->db->join('role', 'role.role_id = user.role_id');
		return $this->db->get_where('user', ['user_id' => $user_id])->row_array();
	}

	public function resendEmailAll()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username !=', 'admin');
		$this->db->where('email !=', '');
		return $this->db->get()->result_array();
	}

	public function getCountUser($role_id)
	{
		$this->db->where('role_id', $role_id);
		$this->db->from('user');
		return $this->db->count_all_results();
	}

	public function deleteUser($user_id)
	{
		$this->db->delete('user', array('user_id' => $user_id));
	}

	public function insertUser($data)
	{
		$this->db->insert('user', $data);
	}

	public function updateUser($data, $id)
	{
		$this->db->where('user_id', $id);
		$this->db->update('user', $data);
	}

	public function is_active($data)
	{
		$this->db->set('is_active', $data);
		$this->db->update('user');
	}
}
