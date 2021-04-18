<?php 
     include "models/ProcessModel.php";
	class ProcessController extends Controller{
		use ProcessModel;
		//ham mac dinh
		//ham tao
		public function __construct(){
			//kiem tra neu gio hang chua ton tai thi khoi tao no
			if(!isset($_SESSION["process"]))
				$_SESSION["process"] = array();
		}
		
		public function choGiaoHang(){
			
			$this->loadView("ChoGiaoHangView.php");
		}
		public function daGiaoHang(){
			
			$this->loadView("DaGiaoHangView.php");
		}
		public function daNhanHang(){
			
			$this->loadView("DaNhanHangView.php");
		}
		public function commentstar(){
			
			$this->loadView("CommentStarView.php");
		}
		public function comment(){
			
			$this->loadView("CommentView.php");
		}
		public function ratinger(){
			
			$this->loadView("CommentStarErrorView.php");
		}
		public function CommentPost(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->modelComment($id);

		}
		public function personalinfor(){
			
			$this->loadView("PersonalInforView.php");
		}
		public function InforPost(){
			$this->modelInfor();			
		}

		public function delete(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham cartDelete tu model de xoa phan tu khoi session array
			$this->modelDelete($id);
			//quay lai trang gio hang
			header("location:index.php?controller=process&action=choGiaoHang");
		}
		public function checkOut(){
			//kiem tra neu user chua dang nhap thi di chuyen den trang login, nguoc lai thi thanh toan gio hang
			if(!isset($_SESSION["customer_name"]))
				header("location:index.php?controller=account&action=login");
			else{
				
				header("location:index.php?controller=process&action=choGiaoHang");
			}
		}
		public function checkIn(){
			//kiem tra neu user chua dang nhap thi di chuyen den trang login, nguoc lai thi thanh toan gio hang
			if(!isset($_SESSION["customer_name"]))
				header("location:index.php?controller=account&action=login");
			else{
				
				header("location:index.php?controller=process&action=personalinfor");
			}
		}
		public function rating(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$star = isset($_GET["star"]) ? $_GET["star"] : 0;
			$this->modelRating($id,$star);
			//di chuyen den trang chi tiet san pham
			
		 
		}
}

   ?>