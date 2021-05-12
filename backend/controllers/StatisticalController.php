<?php 
	//include file model
	include "models/StatisticalModel.php";
	class StatisticalController extends Controller{
		//su dung file model o day
		use StatisticalModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function detail(){
			$date_start = $_POST["start"];
			$date_finish = $_POST["finish"];
			$recordPerPage = 15;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordStatisticalOrder($recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelStatistical($recordPerPage);
			//tinh doanh thu
			$revenue = $this->modelRevenue($date_start,$date_finish);
			//load view, truyen du lieu ra view
			$this->loadView("StatisticalView.php",["data"=>$data, "numPage"=>$numPage,'date_start'=>$date_start,'date_finish'=>$date_finish,'revenue'=>$revenue ]);
		}	
		public function checkOut(){
			$id = $_SESSION["id"];
			//goi ham cartAdd tu model de them phan tu vao session array
			$checkOut = $this->modelCheckOut($id);
			}
		public function error(){
			$this->loadView("CheckRight.php");
		}
	}
?>