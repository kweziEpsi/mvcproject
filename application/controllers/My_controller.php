<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller{

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
	public function index(){
		$this->load->view('my_view');
	}
    
    public function test(){
        $this->load->model('my_model');
        $firstName=$this->my_model->firstName();
        echo "Hi my name is, " .$firstName." and my surname is ";
        $lastName=$this->my_model->lastName();
        echo $lastName;
    }
}

?>