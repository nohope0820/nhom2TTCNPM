<?php 
     include "models/NewsModel.php";
	class NewsController extends Controller{
		use NewsModel;
		//ham mac dinh
		public function index(){
			//load view
			$this->loadView("News.php");
	}
}

   ?>