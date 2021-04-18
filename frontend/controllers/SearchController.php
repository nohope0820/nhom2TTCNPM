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
			$this->loadView("SearchProductNameView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function productPrice(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchProductPrice($fromPrice,$toPrice,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelReadSearchProductPrice($fromPrice,$toPrice,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("SearchProductPriceView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function searchFlash(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 15;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchFlash($key,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelReadSearchFlash($key,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("SearchFlash.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function smartSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$data = $this->modelSmartSearch($key);
			foreach($data as $rows){
				echo "<li><img style='width:65px; vertical-align: middle;' src='../assets/upload/products/$rows->photo'> <a href='index.php?controller=products&action=detail&id=$rows->id' style='color: black;text-decoration: none;font-weight:bold; margin-left:13px;font-size:13px; '>$rows->name</a></li>";
			}
		}		
	}
 ?>