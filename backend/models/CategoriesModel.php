<?php 
	trait CategoriesModel{
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
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from categories where parent_id = 0");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//lay cac danh muc con
		public function modelReadSubCategories($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		//update ban ghi
		public function modelUpdate($id){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			$description = $_POST["description"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("update categories set name='$name',parent_id=$parent_id,description='$description' where id=$id");
			//
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo from categories where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo != "" && file_exists("../assets/upload/categories/".$oldPhoto->photo))
					unlink("../assets/upload/categories/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/categories/$photo");
				//update lai truong photo
				$conn->query("update categories set photo='$photo' where id=$id");
			}
		}
		//create bang hi
		public function modelCreate(){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			$description = $_POST["description"];
			$photo = "";
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/categories/$photo");				
			}
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("insert into categories set name='$name', parent_id=$parent_id,description='$description',photo='$photo'");
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo from categories where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo != "" && file_exists("../assets/upload/categories/".$oldPhoto->photo))
				unlink("../assets/upload/categories/".$oldPhoto->photo);
			$conn->query("delete from categories where id=$id; delete from products where category_id=$id");
		}
		//liet ke cac danh muc (cho chu nang create, update)
		public function modelListCategories($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 and id <> $category_id order by id desc");
			//tra ve mot ban ghi
			return $query->fetchAll();
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
				header("location:index.php?controller=categories");
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
	}
 ?>