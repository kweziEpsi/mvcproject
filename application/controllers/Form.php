<?php

class Form extends CI_Controller {
    public function _construct(){
        parent::_construct();
        $this->load->model('form_model');
        //$this->load->helper(array('form','url'));
        $this->load->helper('url');
    }

        public function index()
        {
           

            //validating the form below
           
                $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Name', 'required|min_length[10]|max_length[50]',
                        array('required' => 'The %s field cannot be empty.'));
                $this->form_validation->set_rules('email', 'Email', 'required|min_length[10]|max_length[50]|valid_email',
                        array('required' => 'You must provide an %s.')
                );

                $this->load->model('Form_model');
                $data['userArray'] = $this->Form_model->return_users();
                
                //load the form again if validation is false

                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('my_form',$data);      
                }
                else
                {
                 //save the data if validation rules are passed
                    $save=array(
                        'name' =>$this->input->post('name'),
                        'email' => $this->input->post('email')
                    );
                    $this->load->model('Form_model');
                    $this->Form_model->saveData($save);
                
                //loading the success page
                    $this->load->view('form_success');
                }
        }
        /*public function edit($id){
            $this->load->model('Form_model');
            $user=$this->Form_model->find_user($id);

            $this->load->view('edit',array('user'=>$user));
        }
        public function update($id){
            $this->load->model('Form_model');
            $this->Form_model->updating_data($id);

        }*/
  
}