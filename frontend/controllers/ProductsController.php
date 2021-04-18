
<?php 
	//include file model
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//su dung file model o day
		use ProductsModel;
		//ham tao
		public function index(){
			//load view
			$this->loadView("LayoutTrangTrong.php");
		}


		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function category(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 15;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($category_id,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($category_id,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("ProductsCategoryView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function filter(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 15;
			//tinh tong so trang
			$numPage = ceil($this->totalFilterRecord($category_id,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelFilter($category_id,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("ProductsFilterView.php",["data"=>$data,"numPage"=>$numPage]);
		}	
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);

			//load view, truyen du lieu ra view
			$this->loadView("ProductsDetailView.php",["record"=>$record]);
		}
		public function detailView(){
			
		    $this->modelHotProducts();
			
			//load view, truyen du lieu ra view
			$this->loadView("ProductsDetailView.php");
		}
		public function star(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$star = isset($_GET["star"]) ? $_GET["star"] : 0;
			$this->modelComment($id,$star);
		
}
}
 ?>