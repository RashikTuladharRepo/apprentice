<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>OUR FACULTY | THE APPRENTICE FIRM</title>


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
    <div class="contentheaderimageholder"><img src="images/faculties.jpg" width="100%" height="auto" style="min-height: 400px;"></div>
</div>
<!--contentheaderimagewrapper wrapper ends-->




<!--otherpagecontentwrapper wrapper starts-->
<div class="otherpagecontentwrapper">

    <div class="otherpagesecondnavwrapper">
        <div class="otherpagesecondnav">
            <ul id="menu">
                <li><a href="javascript:void(0)" class="active">&nbsp;&nbsp;Our Faculty&nbsp;&nbsp;</a></li>
            </ul>

        </div>
    </div>
    <div class="clearfix"></div>

    <div class="otherpagecontentholder">

        <div style="text-align: center; color:gray; font-size: 32px; font-family: rashik;">
            Our Faculties
        </div><br>

        <div id="contents">
            <h2 style="color:#FFBC4B; font-family:rashik; font-size: 30px;font-weight: 100;">Our Faculties</h2>
            It is manned by locally and internationally certified trainers who have many years of vast industry-based
            international experience in the curricular programs they are handling. Trainers are baccalaureate degree
            holders. Some have gone up to the Master's level and even doctorate (Ph.D.). On top of their academic
            degrees from the country's top colleges and universities, are their professional certifications (from
            Certificate to Diploma levels) awarded by international bodies and registered training organizations
            such as Training Services Australia (TSA), Western Australia (WA) Training, American Hotel and Lodging
            Association (AH&LA- Educational Institute), Australasian Hotel College, Serv Safe, to name a few.<br><br>
            Furthermore, the Academy has a pool of highly competent resource speakers/visiting faculty members
            for various corporate trainings, call center personnel development and information technology
            seminars.<br><br>
            All Our Trainers are Highly qualified and competent trainers with international certifications, and more
            than 11 years of experience in Hotel & Cruise line hospitality, corporate and academic sectors.<br><br>
        </div>
        <br>
        <br>
        <br>        <br>
        <br>
        <br>        <br>
        <br>
        <br>
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