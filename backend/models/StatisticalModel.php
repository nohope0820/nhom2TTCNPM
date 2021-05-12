<?php 
	trait StatisticalModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelStatistical($recordPerPage){
			//lay bien p truyen tu url
			$date_start = $_POST["start"];
			$date_finish = $_POST["finish"];
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("SELECT * FROM orders WHERE deliveried=1 and date between '$date_start' and '$date_finish' order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}

		public function totalRecordStatisticalOrder($recordPerPage){
			//lay bien ket noi
			$date_start = $_POST["start"];
			$date_finish = $_POST["finish"];
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * FROM orders WHERE deliveried=1 and date between '$date_start' and '$date_finish'");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}

		public function modelRevenue($date_start,$date_finish){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT sum(price) as doanhthu FROM orders WHERE deliveried=1 and date between '$date_start' and '$date_finish'");
			//tra ve mot ban ghi
			return $query->fetchAll();
			//---
		}

		public function modelGetCustomers($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from customers where id= '$id'");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}

		public function modelCheck($id)
		{
			$id = $_SESSION["id"];
			$conn = Connection::getInstance();
			//kiem tra xem email do da ton tai chua, neu chua ton tai thi moi insert
			$query = $conn->query("select * from users where id='$id' and admin_orders=1");
			$check = $query->rowCount();
			return $check;
		}
	}
?>