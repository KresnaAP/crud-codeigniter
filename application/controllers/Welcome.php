<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();		
		$this->load->model('student_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["students"] = $this->student_model->getAll();
		$this->load->view('detail', $data);
	}

	public function addStudent()
	{
		$student = $this->student_model;
        $validation = $this->form_validation;
        $validation->set_rules($student->rules());

        if ($validation->run()) {
            $student->create();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
		$this->load->view('add_student');
	}

	public function editStudent($id = null)
    {
        if (!isset($id)) redirect('welcome/');
       
        $student = $this->student_model;
        $validation = $this->form_validation;
        $validation->set_rules($student->rules());

        if ($validation->run()) {
            $student->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["student"] = $student->getById($id);
        if (!$data["student"]) show_404();
        
        $this->load->view("edit_student", $data);
    }

    public function deleteStudent($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->student_model->delete($id)) {
            redirect(site_url('welcome/'));
        }
    }
}
