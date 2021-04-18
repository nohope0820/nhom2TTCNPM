<?php 
     include "models/ContactModel.php";
	class ContactController extends Controller{
		use ContactModel;
		//ham mac dinh
		public function index(){

				$recordPerPage = 5;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("ContactView.php",["data"=>$data,"numPage"=>$numPage]);
	}
	public function evaluatePost(){
			$this->modelEvaluate();			
		}
		public function checkOut(){
			//kiem tra neu user chua dang nhap thi di chuyen den trang login, nguoc lai thi thanh toan gio hang
			if(!isset($_SESSION["customer_name"]))
				header("location:index.php?controller=account&action=login");
			else{
				
				header("location:index.php?controller=contact");
			}
		}

}

   ?>