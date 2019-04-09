<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}
public function login_view(){

    
    if(isset($_SESSION['user-logged']))
    {
        redirect('dashboard/index2');
    }
    $this->load->view("login.php");
    }
    function login_user(){


      if(isset($_SESSION['user-logged']))
    {
        redirect('Dashboard/index2');
    }
        $user_login=array(
      
        'user_email'=>$this->input->post('user_email'),
        'user_password'=>$this->input->post('user_password'),
        'login_type'=>$this->input->post('login_type'),
      
          );
          echo $this->input->post('login_type');
         
      
          $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password'], $user_login['login_type']);
            if($data)
            {
              //$this->session->set_userdata('username',$data['username']);
              //$this->session->set_userdata('login_type',$data['login_type']);
              
              $_SESSION['username']=$user_login['login_type'];
                $_SESSION['login_type']=$user_login['login_type'];
                $_SESSION['user-logged']=TRUE;
      
              redirect('Dashboard/index2');
            }
            else{
              $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
              $this->load->view("login.php");
      
            }
      
      
      }
      public function user_logout(){

        $this->session->sess_destroy();
        redirect('/', 'refresh');
      }
      
}

?>