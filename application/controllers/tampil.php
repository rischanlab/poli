<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tampil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','grocery_CRUD'));
		session_start();
		
	}

	function _manage_output($output = null)
	{
	
		$this->load->view('input/tampil.php',$output);
	}

	function index()

	{

			$session=isset($_SESSION['admin']) ? $_SESSION['admin']:'';
			if($session!=""){
					$pecah=explode("|",$session);
					$status = $data["STATUS"] = $pecah[2];
			
			if($data["STATUS"]=="Admin"){
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."tampil/mhs_management'>";
			}
			else{
				?>
<script type="text/javascript" language="javascript">
			alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
			</script>
<?php
echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
			}
		}
		else{
			?>
<script type="text/javascript" language="javascript">
		alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
		</script>
<?php
echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
		}
	}
	

	
	
function admin_management()
	{
		$session=isset($_SESSION['admin']) ? $_SESSION['admin']:'';
		if($session!=""){
					$pecah=explode("|",$session);
					$status = $data["STATUS"] = $pecah[2];

			if($data["STATUS"]=="Admin"){
		
				$crud = new grocery_CRUD();
				$crud->set_language("indonesian");
				$crud->set_theme('datatables');
				$crud->set_table('KKN_POLIADMIN');
			
				
				$crud->display_as('USERNAME','Username')
				->display_as('PASSWORD','Password')
				->display_as('STATUS','Status')
				->display_as('NAMA','Nama Lengkap');
				$crud->add_fields('USERNAME','PASSWORD','NAMA','STATUS');
				$crud->edit_fields('USERNAME','PASSWORD','NAMA','STATUS');
				$crud->columns('USERNAME','PASSWORD','NAMA','STATUS');
				$output = $crud->render();
		
				$this->_manage_output($output);
				}
				else{
				?>
<script type="text/javascript" language="javascript">
			alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
			</script>
<?php
echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
			}
		}
		
		else{
			?>
<script type="text/javascript" language="javascript">
		alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
		</script>
<?php
echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
		}
	}
	
 

	
	function mhs_management()
	{
			$session=isset($_SESSION['admin']) ? $_SESSION['admin']:'';
				if($session!=""){
					$pecah=explode("|",$session);
					$status = $data["STATUS"] = $pecah[2];

			if($data["STATUS"]=="Admin"){
				$crud = new grocery_CRUD();
				$crud->set_language("indonesian");
				$crud->set_theme('datatables');
				$crud->set_table('KKN_POLI');
			
				
				
				$crud->unset_add();
				$crud->edit_fields('NIM','NAMA','GOL_DARAH','STATUS_SEHAT','KET');
				$crud->columns('NIM','NAMA','PRODI','FAK','GOL_DARAH','STATUS_SEHAT','KET');
				$output = $crud->render();
		
				$this->_manage_output($output);
				
				}
				else{
				?>
<script type="text/javascript" language="javascript">
			alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
			</script>
<?php
echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
			}
		}
		
		else{
			?>
<script type="text/javascript" language="javascript">
		alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
		</script>
<?php
echo "<meta http-equiv='refresh' content='0; url=".base_url()."login'>";
		}
	}
	

 





}