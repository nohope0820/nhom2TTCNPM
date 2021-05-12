<?php 
	//include file model
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//su dung file model o day
		use SearchModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function productName(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 15;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchProductName($key,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelReadSearchProductName($key,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("SearchProduct.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function smartSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$data = $this->modelSmartSearch($key);
			foreach($data as $rows){
				echo "<li><img style='width:65px; vertical-align: middle;' src='../assets/upload/products/$rows->photo'> <a href='index.php?controller=search&action=detail&id=$rows->id' style='color: black;text-decoration: none;font-weight:bold; margin-left:13px;font-size:13px; '>$rows->name</a></li>";
			}
		}	
		public function checkOut(){
			$id = $_SESSION["id"];
			//goi ham cartAdd tu model de them phan tu vao session array
			$checkOut = $this->modelCheckOut($id);
			}
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : "";
			//dinh nghia so ban ghi tren mot trang
			//lay du lieu tu model
			$data = $this->modelDetail($id);
			//load view, truyen du lieu ra view
			$this->loadView("SearchProductDetail.php",["data"=>$data]);
		}	
	}
 ?>