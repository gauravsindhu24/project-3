<?php 

class Questions_db extends CI_Model
{
    public function insert_ques($data)
    {
        $this->db->insert('tbl_questions', $data);
        return true;
    }

    public function get_questions()
    {
        $this->db->where('get_user_id', $this->session->userdata('user_id'));
        $query = $this->db->get('tbl_questions');
        return $query->result();
    }

    public function del_questions()
    {
        $this->db->where('ques_id', $this->uri->segment(3));
        $this->db->delete('tbl_questions');
        return true;
    }

    public function edit_questions($id)
    {
        $this->db->where('ques_id', $id);
        $query = $this->db->get('tbl_questions');
        return $query->result();
    }

    public function update_questions($ques_id, $data)
    {
        $this->db->where('ques_id', $ques_id);
        $query = $this->db->update('tbl_questions', $data);
        return true;
    }
    
}

?>