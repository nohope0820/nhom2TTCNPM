<?php 
	trait OrdersModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal();
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orders order by id,status desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from orders");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi table orders
		public function modelGetOrders($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orders where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//lay mot ban ghi trong table customers		
		public function modelGetCustomers($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from customers where id= '$id'");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//lay mot ban ghi trong table products		
		public function modelGetProducts($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//xac nhan da giao hang
		public function modelDelivery($id){
			//---
			$conn = Connection::getInstance();
			$conn->query("update orders set status = 1 where id = $id");
		}
		//xac nhan da giao hang
		public function modelDeliveried($id){
			//---
			$conn = Connection::getInstance();
			$conn->query("update orders set deliveried = 1 where id = $id;update orders set status = 3  where id = $id");
		}
		//lay danh sach cac san pham trong talbe orderdetails
		public function modelListOrderDetails($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orderdetails where order_id = $id");
			//tra ve mot ban ghi
			return $query->fetchAll();
			//---
		}
		public function modelCheckOut($id)
		{
			$id = $_SESSION["id"];
			$conn = Connection::getInstance();
			//kiem tra xem email do da ton tai chua, neu chua ton tai thi moi insert
			$query = $conn->query("select * from users where id='$id' and admin_orders=1");
			$check = $query->rowCount();
			if($check == 1)
			{
				header("location:index.php?controller=orders");
			}
			else{
				header("location:index.php?controller=users&action=error&message=noRight");
			}
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