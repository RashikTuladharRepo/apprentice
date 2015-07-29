
<?php
$uri= $_SERVER['REQUEST_URI'];
$array=explode("/",$uri);
$count=count($array);
$page=trim(strtolower($array[$count-1]));
//echo $page=trim($page);
?>

<?php

switch($page)
{
        // case "index.php":
        //         echo"<div class=\"footer\">";
        //         echo"<div class=\"footerimage\"><img src=\"images/footerimage/footerimage.png\"></div>";
        //         echo"<div class=\"clearfix\"></div>";
        //         echo"</div>";

        // break;


        // case "about.php":
        //         echo"<div class=\"footer\">";
        //         echo"<div class=\"footerimage\"><img src=\"images/footerimage/aboutfooterimage.png\"></div>";
        //         echo"<div class=\"clearfix\"></div>";
        //         echo"</div>";
        // break;


        // case "courses.php":
        //         echo"<div class=\"footer\">";
        //         echo"<div class=\"footerimage\"><img src=\"images/footerimage/coursefooterimage.png\"></div>";
        //         echo"<div class=\"clearfix\"></div>";
        //         echo"</div>";
        // break;


        // case "facilities.php":
        //         echo"<div class=\"footer\">";
        //         echo"<div class=\"footerimage\"><img src=\"images/footerimage/facilityfooterimage.png\"></div>";
        //         echo"<div class=\"clearfix\"></div>";
        //         echo"</div>";
        // break;

        // case "contact.php":
        //         echo"<div class=\"footer\">";
        //         echo"<div class=\"footerimage\"><img src=\"images/footerimage/contactfooterimage.png\"></div>";
        //         echo"<div class=\"clearfix\"></div>";
        //         echo"</div>";
        // break;


        default:
                echo"<div class=\"footer\">";
                echo"<div class=\"footerimage\"><img src=\"images/footerimage/footerimage.png\"></div>";
                echo"<div class=\"clearfix\"></div>";
                echo"</div>";
}


?>



<div class="footerwrappercontent">
    <div class="footercontent"><br>Copyright &copy; 2015 The Apprentice Firm. <br>All Rights Reserved.</div>
</div>