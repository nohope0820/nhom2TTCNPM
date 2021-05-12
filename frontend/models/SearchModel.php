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
		//tinh tong so ban ghi
		public function totalRecordSearchProductName($key,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where name like '%$key%'");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//ham lay danh sach cac ban ghi co phan trang
		public function modelReadSearchProductPrice($fromPrice,$toPrice,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecordSearchProductPrice($fromPrice,$toPrice,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where price >= $fromPrice and price <= $toPrice");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}	
		public function modelReadSearchFlash($key,$recordPerPage){
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
		//tinh tong so ban ghi
		public function totalRecordSearchFlash($key,$recordPerPage){
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
			$query = $conn->query("select id,name,photo,price from products where name like '%$key%' order by id desc limit 0,7");
			return $query->fetchAll();
		}	
		public function modelListCategories(){
   		$conn = Connection::getInstance();
   		$query = $conn->query("select * from categories order by id desc");

   		return $query->fetchAll();}	
	}
 ?>