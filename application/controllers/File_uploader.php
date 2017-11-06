<?php defined('BASEPATH') OR exit('No direct script access allowed');






class File_uploader extends CI_Controller {

	public function __construct() {

        parent::__construct();

		
    }
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function config_upload_file($directory)
	{
		if (!is_dir('images/'.$directory)) 
		{
			mkdir('./images/'. $directory, 0777, TRUE);
		}
		
		$config['upload_path']   =   "images/".$directory."/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		
       
		$this->load->library('upload',$config);

		$this->upload->initialize($config);
	
		
	}
	
	public function upload_file($directory, $file)
	{
		$this->config_upload_file($directory);
		if(!$this->upload->do_upload($file))
		{
			//echo $this->upload->display_errors();
			return NULL;
		}
		else
		{




			$finfo=$this->upload->data();
			$imagepath = $finfo['file_name'];
			return "images/".$directory."/".$imagepath;
           //$this->_createThumbnail($finfo['file_name']); $data['uploadInfo'] = $finfo; $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext']; $this->load->view('upload_success',$data);
       }
	}
}