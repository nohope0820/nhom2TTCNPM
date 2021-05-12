<?php 
	trait PromotionsModel{
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
			$query = $conn->query("select * from promotions order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from promotions");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from promotions where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}		
		//update ban ghi
		public function modelUpdate($id){
			
			//lay bien ket noi
			$conn = Connection::getInstance();
			
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo from promotions where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo))
					unlink("../assets/upload/promotions/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/promotions/$photo");
				//update lai truong photo
				$conn->query("update promotions set photo='$photo' where id=$id");
			}
			if($_FILES["photo1"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo1 from promotions where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo1 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo1))
					unlink("../assets/upload/promotions/".$oldPhoto->photo1);
				//---
				$photo1 = time()."_".$_FILES["photo1"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo1"]["tmp_name"], "../assets/upload/promotions/$photo1");
				//update lai truong photo1
				$conn->query("update promotions set photo1='$photo1' where id=$id");
			}
			if($_FILES["photo2"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo2 from promotions where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo2 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo2))
					unlink("../assets/upload/promotions/".$oldPhoto->photo2);
				//---
				$photo2 = time()."_".$_FILES["photo2"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo2"]["tmp_name"], "../assets/upload/promotions/$photo2");
				//update lai truong photo2
				$conn->query("update promotions set photo2='$photo2' where id=$id");
			}
			if($_FILES["photo3"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo3 from promotions where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo3 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo3))
					unlink("../assets/upload/promotions/".$oldPhoto->photo3);
				//---
				$photo3 = time()."_".$_FILES["photo3"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo3"]["tmp_name"], "../assets/upload/promotions/$photo3");
				//update lai truong photo3
				$conn->query("update promotions set photo3='$photo3' where id=$id");
			}
			if($_FILES["photo4"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo4 from promotions where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo4 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo4))
					unlink("../assets/upload/promotions/".$oldPhoto->photo4);
				//---
				$photo4 = time()."_".$_FILES["photo4"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo4"]["tmp_name"], "../assets/upload/promotions/$photo4");
				//update lai truong photo4
				$conn->query("update promotions set photo4='$photo4' where id=$id");
			}
			if($_FILES["photo5"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo5 from promotions where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo5 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo5))
					unlink("../assets/upload/promotions/".$oldPhoto->photo5);
				//---
				$photo5 = time()."_".$_FILES["photo5"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo5"]["tmp_name"], "../assets/upload/promotions/$photo5");
				//update lai truong photo5
				$conn->query("update promotions set photo5='$photo5' where id=$id");
			}
		
		}
		//create bang ghi
		public function modelCreate(){
			
			$photo = "";
			$photo1 = "";
			$photo2 = "";
			$photo3 = "";
			$photo4 = "";
			$photo5 = "";
		
			
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/promotions/$photo");				
			}
			if($_FILES["photo1"]["name"] != ""){				
				$photo1 = time()."_".$_FILES["photo1"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo1"]["tmp_name"], "../assets/upload/promotions/$photo1");				
			}
			if($_FILES["photo2"]["name"] != ""){				
				$photo2 = time()."_".$_FILES["photo2"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo2"]["tmp_name"], "../assets/upload/promotions/$photo2");				
			}
			if($_FILES["photo3"]["name"] != ""){				
				$photo3 = time()."_".$_FILES["photo3"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo3"]["tmp_name"], "../assets/upload/promotions/$photo3");				
			}
			if($_FILES["photo4"]["name"] != ""){				
				$photo4 = time()."_".$_FILES["photo4"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo4"]["tmp_name"], "../assets/upload/promotions/$photo4");				
			}
			if($_FILES["photo5"]["name"] != ""){				
				$photo5 = time()."_".$_FILES["photo5"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo5"]["tmp_name"], "../assets/upload/promotions/$photo5");				
			}
			
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("insert into promotions set photo='$photo',photo1='$photo1',photo2='$photo2',photo3='$photo3',photo4='$photo4',photo5='$photo5'");
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo from promotions where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo))
				unlink("../assets/upload/promotions/".$oldPhoto->photo);
			//---
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo1 from promotions where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo1 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo1))
				unlink("../assets/upload/promotions/".$oldPhoto->photo1);
			//---
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo2 from promotions where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo2 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo2))
				unlink("../assets/upload/promotions/".$oldPhoto->photo2);
			//---
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo3 from promotions where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo3 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo3))
				unlink("../assets/upload/promotions/".$oldPhoto->photo3);
			//---
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo4 from promotions where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo4 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo4))
				unlink("../assets/upload/promotions/".$oldPhoto->photo4);
			//---
			//---
			//lay anh cu
			$queryOldPhoto = $conn->query("select photo5 from promotions where id=$id");
			//lay mot ban ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo5 != "" && file_exists("../assets/upload/promotions/".$oldPhoto->photo5))
				unlink("../assets/upload/promotions/".$oldPhoto->photo5);

			
			//---
			$conn->query("delete from promotions where id=$id");
		}	
		public function modelCheckOut($id)
		{
			$id = $_SESSION["id"];
			$conn = Connection::getInstance();
			//kiem tra xem email do da ton tai chua, neu chua ton tai thi moi insert
			$query = $conn->query("select * from users where id='$id' and admin_news=1");
			$check = $query->rowCount();
			if($check == 1)
			{
				header("location:index.php?controller=promotions");
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
			$query = $conn->query("select * from users where id='$id' and admin_news=1");
			$check = $query->rowCount();
			return $check;
		}
	}
 ?>