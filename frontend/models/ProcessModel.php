<?php 
    trait ProcessModel{


            public function modelChoGiaoHang(){
   		$conn = Connection::getInstance();
   		$customer_id = $_SESSION["customer_id"];
   		$query = $conn->query("SELECT od.id as id,p.name as tensp,p.photo as anh ,c.address as diachi,c.phone as sdt,od.giamoi as thanhtien,od.size as size,od.quantity as sl FROM orderdetails as od, orders as o,products as p, customers as c WHERE od.order_id = o.id and od.product_id = p.id AND o.customer_id = c.id and o.status = 0 and c.id = '$customer_id'");
   		
   		return $query->fetchAll();

    }
    public function modelDaGiaoHang(){
   		$conn = Connection::getInstance();
   		$customer_id = $_SESSION["customer_id"];
   		$query = $conn->query("SELECT p.name as tensp,p.photo as anh ,c.address as diachi,c.phone as sdt,od.giamoi as thanhtien,od.size as size,od.quantity as sl FROM orderdetails as od, orders as o,products as p, customers as c WHERE od.order_id = o.id and od.product_id = p.id AND o.customer_id = c.id and o.status = 1 and c.id = '$customer_id'");

   		return $query->fetchAll();

    }
    public function modelDaNhanHang(){
        $conn = Connection::getInstance();
      $customer_id = $_SESSION["customer_id"];
      $query = $conn->query("SELECT p.name as tensp,p.photo as anh ,c.address as diachi,c.phone as sdt,od.giamoi as thanhtien,od.size as size,od.quantity as sl,od.product_id as id FROM orderdetails as od, orders as o,products as p, customers as c WHERE od.order_id = o.id and od.product_id = p.id AND o.customer_id = c.id and o.deliveried = 1 and c.id = '$customer_id'");

      return $query->fetchAll();
    }
    public function modelPersonalInfor(){
      $conn = Connection::getInstance();
      $customer_name = $_SESSION["customer_name"];
      $customer_id = $_SESSION["customer_id"];
      $query = $conn->query("SELECT * from customers where fullname = '$customer_name' and id = $customer_id");

      return $query->fetchAll();
    }

    public function modelCommentStar(){}
    public function cartTotal(){
          $conn = Connection::getInstance();
          $customer_id = $_SESSION["customer_id"];
      $query1 = $conn->query("SELECT id as order_id FROM orders where customer_id= '$customer_id' and status=0 order by id DESC LIMIT 0,1");
      $result1 = $query1->fetch();
      $order_id = isset($result1->order_id) ? $result1->order_id : 0;
       $query = $conn->query("select sum(giamoi*quantity) as tgt from orderdetails where order_id=$order_id");
       $result2 = $query->fetch();
       $tgt = isset($result2->tgt) ? $result2->tgt : 0;
       return $tgt;
       
      
    }
    public function modelComment($id){
      $customer_id = $_SESSION["customer_id"];
      $customer_name = $_SESSION["customer_name"];
      $danhgia= $_POST["danhgia"];
        $id=$_GET["id"];
      //kiem tra xem email da ton tai chua, neu chua ton tai thi insert vao csdl
      $conn = Connection::getInstance();



      $queryComment = $conn->query("select OCTET_LENGTH(danhgia) as danhgia from rating where customer_id='$customer_id' and product_id='$id'");
      $queryComment2 = $conn->query("select * FROM `orderdetails`od, orders o WHERE o.id=od.order_id and o.customer_id='$customer_id' and od.product_id='$id'");

       $result = $queryComment->fetch();
        $_SESSION["danhgia"] = $result->danhgia;
      $checkComment2 = $queryComment2->rowCount();
      if(isset($_SESSION["customer_id"]))
      {
        if ($checkComment2 > 0)
         {        
      if($_SESSION["danhgia"] == 0)
      {
        $conn->query("update rating set danhgia='$danhgia' where customer_id='$customer_id' and product_id=$id");
        header("location:index.php?controller=products&action=detail&id=$id&star=5");
    }

    else
      {header("location:index.php?controller=process&action=ratinger&message=numberError");}
    } 
     else
    {header("location:index.php?controller=process&action=ratinger&message=buyError");}
  }
    else
    {header("location:index.php?controller=process&action=ratinger&message=accountError");}


      
    }
     public function modelDelete($id){
      //lay bien ket noi
      $customer_id = $_SESSION["customer_id"];
      $conn = Connection::getInstance();
      $query1 = $conn->query("SELECT id as order_id FROM orders where customer_id= '$customer_id' order by id DESC LIMIT 0,1");
      $result1 = $query1->fetch();
      $order_id = isset($result1->order_id) ? $result1->order_id : 0;
      $conn->query("delete from orderdetails where id=$id;update orders set price = (SELECT sum(od.giamoi * od.quantity) FROM orderdetails as od, orders as o WHERE o.id = od.order_id and od.order_id=$order_id) where $order_id = id;delete from orders where price=0");
    }

    public function processCheckOut(){}

    public function modelRating($id, $star){
      $customer_id = $_SESSION["customer_id"];
      $customer_name = $_SESSION["customer_name"];
      $id=$_GET["id"];
      //insert ban ghi vao table rating
      //lay bien ket noi
      $conn = Connection::getInstance();
      $queryComment = $conn->query("select * from rating where customer_id='$customer_id' and product_id='$id'");
      $queryComment2 = $conn->query("select * FROM `orderdetails`od, orders o WHERE o.id=od.order_id and o.customer_id='$customer_id' and od.product_id='$id'");

      $checkComment2 = $queryComment2->rowCount();
      $checkComment = $queryComment->rowCount();
      if(isset($_SESSION["customer_id"]))
      {
        if ($checkComment2 > 0)
         {        
      if($checkComment <= 0)
      {
      $conn->query("insert into rating set customer_id='$customer_id',customer_name='$customer_name', product_id=$id, star=$star,danhgia=''");
      header("location:index.php?controller=process&action=comment&id=$id&star=$star");
    }

    else
      {header("location:index.php?controller=process&action=ratinger&message=numberError");}
    } 
     else
    {header("location:index.php?controller=process&action=ratinger&message=buyError");}
  }
    else
    {header("location:index.php?controller=process&action=ratinger&message=accountError");}
}

 




    public function modelStar(){
      $id = isset($_GET["id"]) ? $_GET["id"] : 0;
      $customer_id = $_SESSION["customer_id"];
       $conn = Connection::getInstance();
      $query = $conn->query("SELECT * from rating  where customer_id='$customer_id' and product_id=$id");
      return $query->fetchAll();
    }	
    public function modelInfor(){
      $customer_id = $_SESSION["customer_id"];
      
      $address = $_POST["address"];
      $phone = $_POST["phone"];
      //kiem tra xem email da ton tai chua, neu chua ton tai thi insert vao csdl
      $conn = Connection::getInstance();
      
        //insert ban ghi vao csdl
        $conn->query("update customers set phone='$phone',address='$address' where id = '$customer_id'");
        
       header("location:index.php?controller=account&action=logout");
    }
}
 ?>