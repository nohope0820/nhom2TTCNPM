
<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//kiem tra trong csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select id,name,email, password from users where email='$email'");
			$result = $query->fetch();
			if(isset($result->email)){
				if($result->password == $password){
					//dang nhap thanh cong
					$_SESSION["email"] = $email;
					$_SESSION["name"] = $result->name;
					$_SESSION["id"] = $result->id;
					header("location:index.php");
				}
			}

		}
	}
 ?>