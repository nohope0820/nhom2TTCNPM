<?php 
	trait UsersModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from users order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from users");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from users where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function modelUpdate($id){
			//--
			$name = $_POST["name"];
			$password = $_POST["password"];
			$manager = isset($_POST["manager"]) ? 1 : 0;
			$admin_products = isset($_POST["admin_products"]) ? 1 : 0;
			$admin_news = isset($_POST["admin_news"]) ? 1 : 0;
			$admin_orders = isset($_POST["admin_orders"]) ? 1 : 0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			$conn->query("update users set name='$name', manager='$manager', admin_products='$admin_products', admin_news='$admin_news', admin_orders='$admin_orders' where id=$id");
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				$conn->query("update users set password='$password' where id=$id");
			}
		}
		//create bang hi
		public function modelCreate(){
			//--
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$manager = isset($_POST["manager"]) ? 1 : 0;
			$admin_products = isset($_POST["admin_products"]) ? 1 : 0;
			$admin_news = isset($_POST["admin_news"]) ? 1 : 0;
			$admin_orders = isset($_POST["admin_orders"]) ? 1 : 0;
			//ma hoa password
			$password = md5($password);
			//lay bien ket noi
			$conn = Connection::getInstance();
			//kiem tra xem email do da ton tai chua, neu chua ton tai thi moi insert
			$query = $conn->query("select id from users where email='$email'");
			$check = $query->rowCount();
			if($check == 0){
				$conn->query("insert into users set name='$name',email='$email',password='$password', manager='$manager', admin_products='$admin_products', admin_news='$admin_news', admin_orders='$admin_orders'");
				return true;
			}
			else
				return false;
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$conn->query("delete from users where id=$id");
		}
		public function modelCheckOut($id)
		{
			$id = $_SESSION["id"];
			$conn = Connection::getInstance();
			//kiem tra xem email do da ton tai chua, neu chua ton tai thi moi insert
			$query = $conn->query("select * from users where id='$id' and manager=1");
			$check = $query->rowCount();
			if($check == 1)
			{
				header("location:index.php?controller=users");
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
			$query = $conn->query("select * from users where id='$id' and manager=1");
			$check = $query->rowCount();
			return $check;
		}
	}
 ?>