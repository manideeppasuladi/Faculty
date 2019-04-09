<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}
public function login_view(){

    $this->load->view("login.php");
    
    }
    function login_user(){
        $user_login=array(
      
        'user_email'=>$this->input->post('user_email'),
        'user_password'=>$this->input->post('user_password'),
        'login_type'=>$this->input->post('login_type'),
      
          );
          echo $this->input->post('login_type');
         
      
          $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password'], $user_login['login_type']);
            if($data)
            {
              $this->session->set_userdata('username',$data['username']);
              $this->session->set_userdata('username',$data['password']);
              $this->session->set_userdata('login_type',$data['login_type']);
              $this->session->set_userdata('DEPT',$data['DEPT']);
              $_SESSION['emp_id']=$user_login['user_password'];

                $_SESSION['login_type']=$user_login['login_type'];
              
      
              redirect('Dashboard/index2');
            }
            else{
              $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
              $this->load->view("login.php");
      
            }
      
      
      }public function user_logout(){

        $this->session->sess_destroy();
        redirect('/', 'refresh');
      }
      
}

?>