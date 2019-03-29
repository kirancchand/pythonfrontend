<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagecontroller extends CI_Controller {

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
	 function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
         //$this->load->library('upload');
         $this->load->helper(array('form', 'url')); 
         //$this->load->library('Datatables','session');
      } 

    public function index() { 
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 

	public function imagecomparison()
	{
		$this->load->view('menu/imagecomparison');
	}

	public function do_upload_groupphoto() { 
		//$path= site_url();
		//echo $path.'/public/';
		//exit();
         $config['upload_path']   = './public/upload_images/groupimage';
        
         //exit();
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['overwrite'] = TRUE;
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         //print_r($config);
         //exit();
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('group_photo')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('menu/imagecomparison', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('menu/imagecomparison',array('error' => ' ' )); 
            #$this->load->view('home', $data); 
         } 
      } 

      public function do_upload_checkphoto() { 
		//$path= site_url();
		//echo $path.'/public/';
		//exit();
         $config['upload_path']   = './public/upload_images/checkimage';
        
         //exit();
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['overwrite'] = TRUE;
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         //print_r($config);
         //exit();
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('checkphoto')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('menu/imagecomparison', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('menu/imagecomparison',array('error' => ' ' )); 
            #$this->load->view('home', $data); 
         } 
      } 

            public function compareimage() { 
              // echo "hyy";

               #$output = system("python python/w_complexface_recognition.py");
               /*
$mystring = exec('/usr/bin/python /var/www/html/pythonfrontend/application/views/python/w_complexface_recognition.py');
echo $mystring;*/

#$command = escapeshellcmd('/usr/bin/python /var/www/html/pythonfrontend/application/views/python/pythontest.py 2>&1');
/*$output = shell_exec($command);
echo $output;
$arr = json_decode($output);
var_dump($arr);*/
#$output = shell_exec('/usr/bin/python /var/www/html/pythonfrontend/application/views/python/w_complexface_recognition.py 2>&1');

$output = shell_exec('/usr/bin/python /var/www/html/pythonfrontend/application/views/python/w_complexface_recognition.py');

$output = str_replace(array('[',']'), '',$output);
$out = explode(",", $output);

echo $out[0];
//$this->load->view('menu/imagecomparison',array('error' => $out[0] )); 
//echo 1;



      } 

}
