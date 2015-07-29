<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>OUR CERTIFICATION BODY | THE APPRENTICE FIRM</title>


    <!--Main Style and Metro Css-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/iconFont.css">
    <!--Main Style and Metro Css-->

    <link rel="icon" href="images/logo.png" type="image/png">

    <script src="script/jquery.min.js"></script>


    <script>
        $(function() {
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
    <div class="contentheaderimageholder"><img src="images/ceertification.jpg" width="100%" height="400px"></div>
</div>
<!--contentheaderimagewrapper wrapper ends-->




<!--otherpagecontentwrapper wrapper starts-->
<div class="otherpagecontentwrapper">

    <div class="otherpagesecondnavwrapper">
        <div class="otherpagesecondnav">
            <ul id="menu">
                <li><a href="javascript:void(0)" class="active">&nbsp;&nbsp;Certification Body&nbsp;&nbsp;</a></li>
            </ul>

        </div>
    </div>
    <div class="clearfix"></div>

    <div class="otherpagecontentholder">

        <div style="text-align: center; color:gray; font-size: 32px; font-family: rashik;">
            Our Certification Body
        </div><br>
<!-- 
        <div class="facilites-image fleft"><img src="images/certification/1.png"></div>
        <div class="facilites-content">
            <h2 style="  font-weight:100;font-size: 30px;color:#FFBC4B; font-family:Arial; font-weight: 100; font-size: 20px; margin-top: 3%;">With internationally-recognized Australian
                Quality Training Framework (AQTF) syllabus.</h2>
        </div>
        <div class="clearfix"></div><br> -->

        <div style="text-align: right; color:gray; font-size: 32px; margin-right: 100px; font-family: rashik;">
            Accredited by:
            <hr style="opacity: 0.4;">
        </div><br>

        <div class="facilites-content fleft">
            <h2  style="  font-weight:100;font-size: 30px;color:#FFBC4B; font-family:Arial; font-weight: 100; font-size: 20px; margin-top: 3%; text-align: right;">Accredited by Technical Education & Skills
                Development Authority (TESDA)</h2>
        </div>
        <div class="facilites-image fleft"><img src="images/certification/2.png"></div>
        <div class="clearfix"></div>
        <br>


        <div class="facilites-content fleft">
            <h2  style="  font-weight:100;font-size: 30px;color:#FFBC4B; font-family:Arial; font-weight: 100; font-size: 20px; margin-top: 3%; text-align: right;">Accredited Training Center by the
                Department of Tourism</h2>
        </div>
        <div class="facilites-image fleft"><img src="images/certification/3.png"></div>
        <div class="clearfix"></div>
        <br>

        <div class="facilites-content fleft">
            <h2  style="  font-weight:100;font-size: 30px;color:#FFBC4B; font-family:Arial; font-weight: 100; font-size: 20px; margin-top: 3%; text-align: right;">Accredited by the Bureau of Immigration
                and Board of Investments</h2>
        </div>
        <div class="facilites-image fleft"><img src="images/certification/4.png"></div>
        <div class="clearfix"></div>
        <br>


        <div class="facilites-content fleft">
            <h2  style="  font-weight:100;font-size: 30px;color:#FFBC4B; font-family:Arial; font-weight: 100; font-size: 20px; margin-top: 3%; text-align: right;">Accredited Philippines Board of
                Investments</h2>
        </div>
        <div class="facilites-image fleft"><img src="images/certification/5.png"></div>
        <div class="clearfix"></div>
        <br>


    </div>

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