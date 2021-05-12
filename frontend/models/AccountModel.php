<?php 
function loginFromSocialCallBack($socialUser) {
    $conn = Connection::getInstance();
    $name = $socialUser['name'];
    $email = $socialUser['email'];
    $picture = $socialUser['picture'];
    $queryEmail = $conn->query("select email from customers where email='" . $socialUser['email'] . "'");
			$checkEmail = $queryEmail->rowCount();
			if($checkEmail == 0){
				//insert ban ghi vao csdl
				$conn->query("insert into customers (`fullname`,`email`,`picture`) VALUES ('" . $socialUser['name'] . "', '" . $socialUser['email'] . "','" . $socialUser['picture'] . "');");

				$query = $conn->query("select id, email, fullname, password,OCTET_LENGTH(phone) as phone from customers where email='" . $socialUser['email'] . "'");
			    $result = $query->fetch();

                $_SESSION["customer_phone"] = $result->phone;
	            $_SESSION["customer_name"] = $name;
	            $_SESSION["customer_picture"] = $picture;
	            $_SESSION["customer_id"] = $result->id;
	            header("location:index.php");}
	        else
	        {
	        	$query = $conn->query("select id, email, fullname, password, OCTET_LENGTH(phone) as phone from customers where email='" . $socialUser['email'] . "'");
			    $result = $query->fetch();
                $_SESSION["customer_phone"] = $result->phone;
	        	 $_SESSION["customer_name"] = $name;
	        	  $_SESSION["customer_picture"] = $picture;
	        	   $_SESSION["customer_id"] = $result->id;
	        	
	            header("location:index.php");
	        }


	        


				


   
    
}

	trait AccountModel{
		//dang ky tai khoan
		public function modelRegister(){
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//kiem tra xem email da ton tai chua, neu chua ton tai thi insert vao csdl
			$conn = Connection::getInstance();
			$queryEmail = $conn->query("select email from customers where email='$email'");
			$checkEmail = $queryEmail->rowCount();
			if($checkEmail == 0){
				//insert ban ghi vao csdl
				$conn->query("insert into customers set email='$email' ,fullname='$fullname' ,phone='$phone' ,address='$address' ,password='$password'");
				header("location:index.php?controller=account&action=error&message=registerSuccess");
			}else{
				header("location:index.php?controller=account&action=error&message=emailExists");
			}
		}
   


		//Login
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			$password = md5($password);
			$response = $_POST['g-recaptcha-response'];

			//---
           $secret = '6Leyaz4aAAAAABNOmkrLybwjIg-yIidhQIv0bx2H'; //Change your google captcha secret here
            //get verify response data
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $response);
            $responseData = json_decode($verifyResponse);
             
                
			$conn = Connection::getInstance();

			$query = $conn->query("select id, email, fullname, password, phone from customers where email='$email'");
			$result = $query->fetch();

            if(isset($result->email))
              {if($result->password == $password)
         	   	{if ($responseData->success) 
                  {$_SESSION["customer_email"] = $email;
					$_SESSION["customer_name"] = $result->fullname;
					$_SESSION["customer_phone"] = $result->phone;
					$_SESSION["customer_id"] = $result->id;

					
					header("location:index.php");}
         	     else
         	     {header("location:index.php?controller=account&action=error&message=recapchaExists");}}
              else
              {header("location:index.php?controller=account&action=error&message=passwordExists");}
            }
            else
            {   
            	header("location:index.php?controller=account&action=error&message=accountExists");
            }











         
        








			
          }

	}

 ?>