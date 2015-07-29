<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ABOUT US | THE APPRENTICE FIRM</title>


    <!--Main Style and Metro Css-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/iconFont.css">
    <!--Main Style and Metro Css-->

    <link rel="icon" href="images/logo.png" type="image/png">

    <script src="script/jquery.min.js"></script>

    <script>
        $(function() {
            $("#contents").load('about/aboutapprentice.php');
            $("#menu > li a").each(function() {
                var self = $(this);
                var href = self.attr("href");
                self.attr("href", "javascript: void(0);");
                self.click(function() {
                    $("#contents").fadeOut('slow',function(){
                        $("#contents").load(href, function(){
                            $("#contents").fadeIn("slow");
                        });
                    });
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#menu li a").click(function(){
                $("#menu li a").removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>




<!--Header wrapper starts-->
<div class="headerwrapper">
    <!--Header starts-->
    <div class="header">
        <!--Logo Container starts-->
        <div class="headerleft fleft"></div>
        <!--Logo Container ends-->
        <!--Menu Container starts-->
        <?php include"includes/navigation.php"; ?>
        <!--Menu Container ends-->
        <div class="clearfix"></div>
    </div>
    <!--Header ends-->
</div>
<!--Header wrapper ends-->



<!--contentheaderimagewrapper wrapper starts-->
<div class="contentheaderimagewrapper">
    <div class="contentheaderimageholder"><img src="images/aboutus.jpg" width="100%" height="400px"></div>
</div>
<!--contentheaderimagewrapper wrapper ends-->




<!--otherpagecontentwrapper wrapper starts-->
<div class="otherpagecontentwrapper">

<div class="otherpagesecondnavwrapper">
    <div class="otherpagesecondnav">
        <ul id="menu">
            <li><a href="about/aboutapprentice.php" class="active">&nbsp;&nbsp;About Apprentice&nbsp;&nbsp;</a></li>
            <li><a href="about/aboutgsta.php">&nbsp;&nbsp;About Our Partner - GSTA&nbsp;&nbsp;</a></li>
            <li><a href="about/aboutktmo.php">&nbsp;&nbsp;About Our Partner - KTM Overseas&nbsp;&nbsp;</a></li>
            <li><a href="about/aboutneoncasino.php">&nbsp;&nbsp;About Our Partner - Neon Casino &amp; Gaming&nbsp;&nbsp;</a></li>
        </ul>

    </div>
</div>
    <div class="clearfix"></div>

    <div class="otherpagecontentholder" style="background-image: none;"><div id="contents"></div></div>

  </div>
<!--otherpagecontentwrapper wrapper starts-->





<!--fourth wrapper starts-->
<!--<div class="fourthcontainerwrapper">-->
<!--    --><?php //include"includes/fourthcontent.php"; ?>
<!--</div>-->
<!--fourth wrapper ends-->



<!--footerwrapper starts-->
<div class="footerwrapper">
    <?php include"includes/footer.php"; ?>
</div>
<!--footerwrapper ends-->

</body>
</html>