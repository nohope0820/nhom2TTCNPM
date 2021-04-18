<?php 
    trait ContactModel{

    public function modelDanhgia(){
   		$conn = Connection::getInstance();
   		$customer_id = $_SESSION["customer_id"];
   		$query = $conn->query("SELECT fullname,email  FROM customers WHERE id = '$customer_id'");

   		return $query->fetchAll();
     

    }
    public function modelEvaluate(){
			$customer_id = $_SESSION["customer_id"];
      $customer_email = $_SESSION["customer_email"];
      $name = $_POST["name"];
			$danhgia= $_POST["danhgia"];
			//kiem tra xem email da ton tai chua, neu chua ton tai thi insert vao csdl
			$conn = Connection::getInstance();
				$conn->query("insert into evaluates set customer_email='$customer_email', name='$name' ,danhgia='$danhgia'");
				header("location:index.php?controller=contact");
			}
public function modelRead($recordPerPage){
      //lay bien p truyen tu url
      $p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;      
      //lay tu ban ghi nao
      $from = $p * $recordPerPage;
      //---
      //lay bien ket noi csdl
      $conn = Connection::getInstance();
             //
      //thuc hien truy van
      $query = $conn->query("select * from evaluates order by id desc limit $from,$recordPerPage");
      //lay toan bo ket qua tra ve
      $result = $query->fetchAll();     
      //---
      return $result;
    }
   public function totalRecord($recordPerPage){
      //lay bien ket noi
      $conn = Connection::getInstance();
      $query = $conn->query("select id from evaluates");
      //tra ve tong so ban ghi
      return $query->rowCount();
    }
     public function processCheckOut(){}
    }
 ?>