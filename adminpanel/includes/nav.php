<?php
$uri= $_SERVER['REQUEST_URI'];
$array=explode("/",$uri);
$count=count($array);
$page=trim(strtolower($array[$count-1]));
// echo $page=trim($page);
// die();
?>


	<li><a href="dashboard.php" class="<?php echo ($page=="dashboard.php"||$page=="")?"active" :""; ?>">&nbsp;&nbsp;Home&nbsp;&nbsp;</a></li>
	<li><a href="news.php" class="<?php echo ($page=="news.php")?"active" :""; ?>">&nbsp;&nbsp;News&nbsp;&nbsp;</a></li>
	<li><a href="slider.php" class="<?php echo ($page=="slider.php")?"active" :""; ?>">&nbsp;&nbsp;Slider&nbsp;&nbsp;</a></li>
	<li><a href="#" class="<?php echo ($page=="students.php")?"active" :""; ?>">&nbsp;&nbsp;Student Speak&nbsp;&nbsp;</a></li>
	<li><a href="sliderimages.php" class="<?php echo ($page=="sliderimages.php")?"active" :""; ?>">&nbsp;&nbsp;Slider Images&nbsp;&nbsp;</a></li>
	<li><a href="newslist.php" class="<?php echo ($page=="newslist.php")?"active" :""; ?>">&nbsp;&nbsp;News Lists&nbsp;&nbsp;</a></li>