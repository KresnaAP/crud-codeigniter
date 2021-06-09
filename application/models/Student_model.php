<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model
{
    private $_table = "students";

    public $id;
    public $name;
    public $gender;
    public $birthplace;
    public $birthdate;
    public $address;
    public $phone;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'gender',
            'label' => 'Gender',
            'rules' => 'required'],
            
            ['field' => 'birthplace',
            'label' => 'Birthplace',
            'rules' => 'required'],

            ['field' => 'birthdate',
            'label' => 'Birthdate',
            'rules' => 'required'],

            ['field' => 'address',
            'label' => 'Address',
            'rules' => 'required'],

            ['field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function create()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->name = $post["name"];
		$this->gender = $post["gender"];
		$this->birthplace = $post["birthplace"];
        $this->birthdate = $post["birthdate"];
		$this->address = $post["address"];
        $this->phone = $post["phone"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->name = $post["name"];
		$this->gender = $post["gender"];
		$this->birthplace = $post["birthplace"];
        $this->birthdate = $post["birthdate"];
		$this->address = $post["address"];
        $this->phone = $post["phone"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
