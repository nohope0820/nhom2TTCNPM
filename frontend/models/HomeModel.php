<?php 
   trait HomeModel{
      public function modelHotProducts1(){
         $conn = Connection::getInstance();
         $query = $conn->query("select * from products where hot=1 order by id desc limit 0,5");

         return $query->fetchAll();
      }
      public function modelHotProducts2(){
         $conn = Connection::getInstance();
         $query = $conn->query("select * from products where hot=1 order by id desc limit 5,5");

         return $query->fetchAll();
      }
      public function modelListCategories(){
         $conn = Connection::getInstance();
         $query = $conn->query("select * from categories where displayhome=1 order by id desc");

         return $query->fetchAll();}

       public function modelPromotions(){
         $conn = Connection::getInstance();
         $query = $conn->query("select * from promotions");

         return $query->fetchAll();}

            public function modelListProducts($category_id){
         $conn = Connection::getInstance();
         $query = $conn->query("select * from products where category_id=$category_id order by id desc limit 0,5");
         return $query->fetchAll();
      }

         public function modelHotNews(){
         $conn = Connection::getInstance();
         $query = $conn->query("select * from news where hot=1 order by id desc limit 0,6");

         return $query->fetchAll();
      }
   }
 ?>