<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct() { 
 parent::__construct();
 $this->load->helper('security');
 $this->load->database();
 $this->load->helper('form');
 $this->load->library('form_validation');
 $this->load->library('session');
 //$this->load->library('database');
 $this->load->model('login_database');
 }



 public function user_login_process() 

 {

       $this->load->library('form_validation');
       $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
       $this->form_validation->set_rules('username', 'Username', 'required');
       $this->form_validation->set_rules('password', 'Password', 'required');
  
    if($this->form_validation->run()==False)
    {	 

		     if(isset($this->session->userdata['logged_in']))
                {
                 $this->load->view('Admin_home');
                   }
             else{
                   $this->load->view('login');

                  }
     }

 else
 { // validation True
         
     $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                   );

                            $result = $this->login_database->login($data);                      
                      if ($result == TRUE) 
                         {

                                 $username = $this->input->post('username');
                                   $result = $this->login_database->read_user_information($username);
                                     
                                     if ($result != false)
                                        {
                                           $session_data = array(
	                                                                     'id' => $result[0]->Admin_id,
                                                                   'username' => $result[0]->Admin_Name,
                                                                    'password' => $result[0]->Admin_Password
 
                                                                  );
                                                              // Add user data in session
                                                                $this->session->set_userdata('logged_in', $session_data);
                                                                $this->load->view('Admin_home');
                                         }
                          } 

                           else  
                               {
                                   $data = array(
                                                 'error_message' => 'Invalid Username or Password'
                                                 );
                                                  $this->load->view('login', $data);
                                }
   
    }










  


   }

  









	public function index()
	{

     $this->load->view('login');

	}








public function Register()
	{

     $this->load->view('register');

	}






	public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('login', $data);
}

















public function Chang_pass() {




       $this->load->library('form_validation');
       $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
       $this->form_validation->set_rules('oldpass', 'Old password', 'required|trim|xss_clean|callback_change');
       $this->form_validation->set_rules('pass1', 'Password', 'matches[pass2]');
       $this->form_validation->set_rules('pass2', 'Password', 'required');
  
    if($this->form_validation->run()==False  )

    {	
    	
    	$this->load->view('Change_password');



       }
       else{


       


       	echo"GOOOOOOOOOOOD";



       }









}









  public function change() // we will load models here to check with database
 
  
{
 
 
     $session_data = $this->session->userdata('logged_in');
 
     $query=$this->db->query("select * from Admin where Admin_id =".$session_data['id']);
 
     foreach ($query->result() as $my_info) {
 
     $db_password = $my_info->Admin_Password;
 
     $db_id = $my_info->Admin_id; 
 
 
     }
 
     if (($this->input->post('oldpass',$db_password) == $db_password) && ($this->input->post('pass1') != '') && ($this->input->post('pass2')!='')) { 
 
$fixed_pw = $this->input->post('pass1');
 
     $update = $this->db->query("Update Admin SET 	Admin_Password='$fixed_pw' WHERE Admin_id='$db_id'")or die(mysql_error()); 
 
     $this->form_validation->set_message('change','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>
<strong> Congratulations Password Updated!</strong></div>');
return false;
   
 
     }
   else  {
$this->form_validation->set_message('change','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>
  <strong> You Enterd Wrong Old Password!</strong> </div>');
 
return false;
 
}
}














}



