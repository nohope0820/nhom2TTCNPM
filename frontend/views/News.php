<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<div style="background-color: white; width: 1200px; margin-left: 175px; border-left: 2px solid purple; border-right: 2px solid black; border-top: 2px solid red; margin-top: 50px;border-radius: 20px 20px 0px 0px;">
<div style="font-size: 25px; font-weight: bold; color: red; margin-left: 90px;font-family: times new roman;text-decoration: underline; padding-top: 20px;">TIN TỨC HOT</div>


<ul class="newshot">
	 <?php $hotNews = $this->modelHotNews(); ?>
               <?php foreach ($hotNews as $rows): ?>
	<li>
		<img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width: 150px; vertical-align: top; margin-right: 15px;float: left;"><b style="font-size: 16px; color: green;"><?php echo $rows->name; ?></b>
		<p><?php echo $rows->description; ?></p>
	</li>
	<?php endforeach; ?>
</ul>
<hr style="height: 2px; margin-left: 75px; width: 1060px;background: green;">
<div style="font-size: 20px; font-weight: bold; margin-top: 60px; margin-left: 110px;font-family: times new roman;text-decoration: underline;">Một số tin tức khác</div>

<ul class="news">
	 <?php $news = $this->modelNews(); ?>
               <?php foreach ($news as $rows): ?>
	<li>
		<img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width: 200px; height: 175px; padding-bottom: 10px;"><br><b style="font-size: 16px; color: green;"><?php echo $rows->name; ?></b>
		<p><?php echo $rows->description; ?></p>
	</li>
	<?php endforeach; ?>
</ul>







<style type="text/css">
	.newshot{list-style: none;
		margin-top: 25px;
		margin-left: 150px;
		margin-bottom:50px;}
    .newshot > li{width: 850px;
    	clear: none;
    	padding: 7px;
    	font-size: 13px;
    	clear: left;
    	padding-bottom: 30px;
    	margin-bottom: 10px;
    	
    	}
    	 .newshot > li:hover{border: 2px solid red;
    	 	border-radius: 0px 20px 20px 0px;}


    .news{list-style: none;

		margin-top: 25px;
		margin-left: 125px;
		margin-bottom:50px;}
    .news > li{width: 205px;
    	display: inline-block;
    	clear: none;
    	padding: 7px;
    	font-size: 13px;
    	clear: left;
    	padding-bottom: 30px;
    	margin-bottom: 10px;
    	margin-right: 18px;
    	
    	}
    .news > li:hover{border: 2px solid red;
    	 }
</style>
</div>
