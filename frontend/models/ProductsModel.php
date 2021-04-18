<?php 
	trait ProductsModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($category_id,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
             //
			//sap xep cac ban ghi theo thu tu
		    $orderBy = "order by id desc";
			
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id=$category_id $orderBy limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		public function modelFilter($category_id,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
             //
			//sap xep cac ban ghi theo thu tu
		    $orderBy = "order by id desc";
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			switch($order){
				case "priceAsc":
					$orderBy = " order by giamoi asc ";
					break;
				case "priceDesc":
					$orderBy = " order by giamoi desc ";
					break;
				case "priceRandom":
					$orderBy = " order by id desc ";
					break;
				case "giaRe":
					$orderBy = "and giamoi > 0 and giamoi < 250000 order by giamoi asc ";
					break;
				case "giaTb":
					$orderBy = "and giamoi > 250000 and giamoi < 700000 order by giamoi asc ";
					break;
				case "giaKha":
					$orderBy = "and giamoi > 700000 and giamoi < 1500000 order by giamoi asc ";
					break;
				case "giaLon":
					$orderBy = "and giamoi > 1500000 order by giamoi asc ";
					break;

			}
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id=$category_id $orderBy limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		public function totalFilterRecord($category_id,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			  $orderBy = "order by id desc";
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			switch($order){
				case "priceAsc":
					$orderBy = " order by giamoi asc ";
					break;
				case "priceDesc":
					$orderBy = " order by giamoi desc ";
					break;
				case "priceRandom":
					$orderBy = " order by id desc ";
					break;
				case "giaRe":
					$orderBy = "and giamoi > 0 and giamoi < 250000 order by giamoi asc ";
					break;
				case "giaTb":
					$orderBy = "and giamoi > 250000 and giamoi < 700000 order by giamoi asc ";
					break;
				case "giaKha":
					$orderBy = "and giamoi > 700000 and giamoi < 1500000 order by giamoi asc ";
					break;
				case "giaLon":
					$orderBy = "and giamoi > 1500000 order by giamoi asc ";
					break;

			}
			$query = $conn->query("select id from products where category_id=$category_id $orderBy");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		public function modelListCategories(){
   		$conn = Connection::getInstance();
   		$query = $conn->query("select * from categories order by id desc");

   		return $query->fetchAll();}

   		 public function modelHotProducts(){
         $conn = Connection::getInstance();
         $query = $conn->query("select * from products where hot=1 order by id desc limit 0,10");

         return $query->fetchAll();}

		//tinh tong so ban ghi
		public function totalRecord($category_id,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where category_id=$category_id");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}								
		//lay ten danh muc san pham
		public function modelGetCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			$result = $query->fetch();
			return isset($result->name) ? $result->name : "";
		}	
		public function modelTotalRating($product_id){
			$conn = Connection::getInstance();
			//tinh tong cac cot star cua table rating tuong ung voi id truyen vao
			$query1 = $conn->query("select sum(star) as sumStar from rating where product_id=$product_id");
			$result1 = $query1->fetch();
			$sumStar = isset($result1->sumStar) ? $result1->sumStar : 0;
			//tinh so luong cac ban ghi cua taable rating tuong ung voi id truyen vao
			$query2 = $conn->query("select id from rating where product_id=$product_id");
			$totalRecord = $query2->rowCount();
			if($totalRecord > 0){
				$avgStar = number_format($sumStar/($totalRecord), 2, '.', '');
				return $avgStar;
			}
			return 0;
		}
				
		public function modelDetailComment($product_id,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
             //
			//thuc hien truy van
			$query = $conn->query("SELECT r.customer_email, r.product_id as id, r.star as star, c.danhgia as danggia, c.name as name FROM rating AS r, comments as c WHERE r.customer_email=c.customer_email and r.product=$product_id limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			return $query->fetchAll();			
	
			
		}
		public function totalRecordd($product_id,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from comments where product_id=$product_id");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
			public function modelComment(){
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$star = isset($_GET["star"]) ? $_GET["star"] : 0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("SELECT * FROM rating WHERE product_id=$id AND star=$star order by id DESC limit 0,5 ");
			return $query->fetchAll();
			
		}				
						
	}
 ?>
