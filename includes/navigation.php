
<?php
$uri= $_SERVER['REQUEST_URI'];
$array=explode("/",$uri);
$count=count($array);
$page=trim(strtolower($array[$count-1]));
//echo $page=trim($page);
?>


<div class="headerright fleft">
    <ul>
        <li><a href="index.php" class="<?php echo ($page=="index.php"||$page=="")?"selected" :""; ?>"><span class="icon-home"></span>&nbsp;HOME</a></li>
        <li><a href="about.php" class="<?php echo ($page=="about.php")?"selected" :""; ?>"><span class="icon-accessibility"></span>&nbsp;ABOUT US</a></li>
        <li><a href="courses.php" class="<?php echo ($page=="courses.php")?"selected" :""; ?>"><span class="icon-stats-up"></span>&nbsp;COURSES</a></li>
        <li><a href="facilities.php" class="<?php echo ($page=="facilities.php")?"selected" :""; ?>"><span class="icon-compass-2"></span>&nbsp;FACILITIES</a></li>
        <li><a href="#" class="<?php echo ($page=="faq.php")?"selected" :""; ?>"><span class="icon-help"></span>&nbsp;FAQ</a></li>
        <li><a href="contact.php" class="<?php echo ($page=="contact.php")?"selected" :""; ?>"><span class="icon-phone"></span>&nbsp;CONTACT</a></li>
    </ul>
</div>