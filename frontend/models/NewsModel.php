<?php 
    trait NewsModel{
    	public function modelHotNews(){
   		$conn = Connection::getInstance();
   		$query = $conn->query("select * from news where hot=1 order by id desc limit 0,3");

   		return $query->fetchAll();
    }
    public function modelNews(){
   		$conn = Connection::getInstance();
   		$query = $conn->query("select * from news where hot=0 order by id desc limit 0,4");

   		return $query->fetchAll();
    }
}
 ?>