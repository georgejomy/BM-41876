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
	public function index()
	{
		$this->load->view('index.php');
	}




	public function loginControl()
	{
	/*Step 1: fetch data passed from the main.php Login form 
		to fetch data passed with post method you can use $this->input->post('Key1');   --similar to $_POST['Key1']
		to fetch data passed with get method you can use $this->input->get('Key1');     --similar to $_GET['Key1']
		to fetch data passed irrespective of the method used to pass,you can use $this->input->get_post('Key1');    --similar to $_REQUEST['Key1']
		*/

		$user['email']=$this->input->post("enam");  
		$user['password']=$this->input->post("passw");
		$url = 'http://services.trainees.baabtra.com/BM-41876/index.php/welcome/index';
		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);

		$context  = stream_context_create($options);
		$result = file_get_contents($url,false, $context);    // used to call the web service
		//print_r($result);
	 
		
		$json=json_decode($result,true); //web service returns a json data, convert it to php array using json_decode
		
		$result1['data']=$json;

			/*Responsecode=200 means login successfull
			  Responsecode=404 means emailid incorrect
			  Responsecode=500 means emailid correct ,password wrong case*/

			if($json['ResponseCode']==200)	//checks the value of responsecode returned from the service
			 	$this->load->view("loginpage",$result1);  //loads a view from views folder
				//echo $json['ResponseCode'];
			 
			else if($json['ResponseCode']==500)
				$this->load->view("wrngpassw",$result1);
				//echo $json['ResponseCode'];

			else if($json['ResponseCode']==404)
				$this->load->view("wrngemail",$result1);
				//echo $json['ResponseCode'];

	}

}
?>