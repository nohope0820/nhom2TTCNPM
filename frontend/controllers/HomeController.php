
<?php 
	//load file model
	include "models/HomeModel.php";
	class HomeController extends Controller{
			use HomeModel;
			
		public function index(){
			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>