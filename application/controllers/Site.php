<?php 

class Site extends CI_Controller
{
    function __construct()
    {
        Parent::__construct();
        $this->load->model('accounts_db');
        $this->load->model('questions_db');
    }

    public function login()
    {
        $this->load->view('layout/pages/login');
    }
    
    public function register()
    {
        $this->load->view('layout/pages/register');
        // $data['content'] = 'layout/pages/register';
        // $this->load->view('site_template', $data);
    }

    public function display_questions()
    {
        $data['all_ques'] = $this->questions_db->get_questions();
        $data['content'] = 'layout/pages/view_questions';
        $this->load->view('site_template', $data);
    }

    public function create_new_question()
    {
        $data['content'] = 'layout/pages/questions';
        $this->load->view('site_template', $data);
    }

    public function display_edit_question($id)
    {
        $data['get_ques'] = $this->questions_db->edit_questions($id);
        $data['content'] = 'layout/pages/edit_questions';
        $this->load->view('site_template', $data);
    }

    public function edit_question()
    {
        $ques_id = $this->input->post('ques_id');
        $data = array(
            'ques_name' => $this->input->post('ques_name'),
            'ques_body' => $this->input->post('ques_body'),
            'ques_skills'  => $this->input->post('ques_skills'),
            'get_user_id'  => $this->session->userdata('user_id'),

           );
        $this->questions_db->update_questions($ques_id, $data);
        $this->session->set_flashdata('ques_msg','Questions has been updated');
        redirect('site/display_questions');
    }

    public function delete_question()
    {
        $this->questions_db->del_questions();
        $this->session->set_flashdata('del_ques','Question has been deleted');
		redirect('site/display_questions');
    }

    public function create_register()
	{
        $this->form_validation->set_rules('Fname', 'First Name', 'required');
        $this->form_validation->set_rules('Lname', 'Last Name', 'required');
        $this->form_validation->set_rules('bday', 'BirthDay Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_users.email]');

        if ($this->form_validation->run() == FALSE)
            {
                $data['content'] = 'layout/pages/register';
                $this->load->view('site_template', $data);
            }
        else
            {
                $data = array(
                    'f_name' => $this->input->post('Fname'),
                    'l_name' => $this->input->post('Lname'),
                    'b_day'  => $this->input->post('bday'),
                    'email'  => $this->input->post('email'),
                    'pass'   => $this->input->post('password'),

                   );
                $this->accounts_db->insert_reg($data);
                $this->session->set_flashdata('message','User has been register');
                redirect('site/register');
            }

    }

    public function add_questions()
	{
		$data = array(
						'ques_name' => $this->input->post('ques_name'),
						'ques_body' => $this->input->post('ques_body'),
                        'ques_skills'  => $this->input->post('ques_skills'),
                        'get_user_id'  => $this->session->userdata('user_id'),

			           );
        $this->questions_db->insert_ques($data);
        $this->session->set_flashdata('ques_msg','Questions has been created');
		redirect('site/create_new_question');

    }

    public function validate_credentails()
	{
		$query = $this->accounts_db->validate();
		if($query)
		{
			$data = array(
						  'email'       => $this->input->post('email'),
                          'f_name'   => $query[0]->f_name,
                          'l_name'   => $query[0]->l_name,
                          'user_id'   => $query[0]->user_id,
						  'is_login_in' => true,
						   );
			$this->session->set_userdata($data);
			redirect('site/display_questions');
		}
		else
		{
            $this->session->set_flashdata('login_error','Wrong username or password');
            redirect('site/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect('site/login');
	}

    
}

?>