<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url', 'text_helper','date'));
		$this->load->database();
		$this->load->library();
		session_start();
	}

	function index()
	{
		$data=array();
		$this->load->model('Input_Model');
		$session=isset($_SESSION['admin']) ? $_SESSION['admin']:'';
		if($session!=""){
			$pecah=explode("|",$session);
			$data["USERNAME"]=$pecah[0];
			$data["NAMA"]=$pecah[1];
		}


		$this->load->view('input/login',$data);
		

	}
	
	function cek(){
		$username = $this->input->post('usernameteks');
		$pwd = $this->input->post('passwordteks');
		$this->load->model('Input_Model');
		$hasil = $this->Input_Model->Data_Login($username,$pwd);
		if (count($hasil->result_array())>0){
			foreach($hasil->result() as $items){
				$session_username=$items->USERNAME."|".$items->NAMA."|".$items->STATUS;
				$tanda=$items->STATUS;
			}
			$_SESSION['admin']=$session_username;
			if($tanda=="Admin"){
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."input'>";
			}
			else {
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
			}
		}
		else{
			?>
<script type="text/javascript">
			alert("Username atau Password Yang Anda Masukkan Salah..!!!");			
			</script>
<?php
echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
		}
	
	
	}
	
	function logout()
	{
		session_destroy();
		echo "<meta http-equiv='refresh' content='0; url=".base_url()."input'>";
	}
	
}