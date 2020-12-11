<?php 

class Accounts_db extends CI_Model
{
    public function insert_reg($data)
    {
        $this->db->insert('tbl_users', $data);
        return true;
    }

    public function validate()
	{
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('pass', $this->input->post('password'));
		$query = $this->db->get('tbl_users');
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
    }
    
}

?>