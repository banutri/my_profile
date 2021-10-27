<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Main'); // load M_Main model
	}

	public function index()
	{
		// Calling view 'main' when index got hit
		$this->load->view('my_profile_page/v_main');
	}

    public function submit_message(){

		// Form validation Rules
		$form_rules = array(
			array(
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'required|valid_email'
			),
			array(
				'field'=>'message',
				'label'=>'Message',
				'rules'=>'required'
			),
		);

		// Setting rules form validation
		$this->form_validation->set_rules($form_rules);
		$this->form_validation->set_error_delimiters('','');

		

		// Run the validation
		if($this->form_validation->run() != FALSE){

			$data_submited = array(
				'id'=>md5(rand(1,1000).date('Y-m-d')),
				'name' =>$this->input->post('name'),
				'email' =>$this->input->post('email'),
				'message' =>$this->input->post('message')
			);
	
			if($this->M_Main->insert_message($data_submited)>0)
			{
				echo json_encode(array(
					'status'=>'ok',
					'description'=>'',
				));
			}
			else
			{
				echo json_encode(array(
					'status'=>'error',
					'description'=>'database error'
				));
			}
		}
		else
		{
			// Setting form error if validation fail
			$form_error = array(
				'email'=>form_error('email'),
				'message'=>form_error('message'),
			);
			
			$which_error = array();
			foreach($form_error as $key=>$fe){
				if($fe!=NULL || $fe!=""){
					$which_error[$key]=form_error($key);
				}
			}

			echo json_encode(array(
				'status'=>'error',
				'description'=>$which_error,
			));
		}

		

		// echo $name."</br>".$email."</br>".$message;
    }
}
