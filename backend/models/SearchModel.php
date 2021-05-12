<?php 
	trait SearchModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelReadSearchProductName($key,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("SELECT * FROM products WHERE MATCH name against('$key' IN NATURAL LANGUAGE MODE) order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		public function totalRecordSearchProductName($key,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where name like '%$key%'");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//smart search
		public function modelSmartSearch($key){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id,name,photo,price from products where name like '%$key%' order by id desc limit 0,5");
			return $query->fetchAll();
		}	
			//lay ten danh muc san pham
		public function modelGetCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			$result = $query->fetch();
			return isset($result->name) ? $result->name : "";
		}	
		//lay danh sach danh muc san pham
		public function modelListCategory(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		//lay danh muc con
		public function modelListCategorySub($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelCheckOut($id)
		{
			$id = $_SESSION["id"];
			$conn = Connection::getInstance();
			//kiem tra xem email do da ton tai chua, neu chua ton tai thi moi insert
			$query = $conn->query("select * from users where id='$id' and admin_products=1");
			$check = $query->rowCount();
			if($check == 1)
			{
				header("location:index.php?controller=products");
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
			$query = $conn->query("select * from users where id='$id' and admin_products=1");
			$check = $query->rowCount();
			return $check;
		}
		public function modelDetail($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id=$id");
			$result = $query->fetchAll();
			return $result;
		}	
	}
 ?>