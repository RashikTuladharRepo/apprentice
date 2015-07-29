<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>THE MANAGING DIRECTOR SAY | THE APPRENTICE FIRM</title>


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
    <div class="contentheaderimageholder"><img src="images/about.jpg" width="100%" height="400px"></div>
</div>
<!--contentheaderimagewrapper wrapper ends-->




<!--otherpagecontentwrapper wrapper starts-->
<div class="otherpagecontentwrapper">

    <div class="otherpagesecondnavwrapper">
        <div class="otherpagesecondnav">
            <ul id="menu">
                <li><a href="javascript:void(0)" class="active">&nbsp;&nbsp;MD say...&nbsp;&nbsp;</a></li>
            </ul>

        </div>
    </div>
    <div class="clearfix"></div>

    <div class="otherpagecontentholder">

        <div style="text-align: center; color:gray; font-size: 32px; font-family: rashik;">
            The Managing Director say...
        </div><br>

        <div class="md-content fleft">
            <h2 style="  font-weight:100;font-size: 30px;color:#FFBC4B; font-family:rashik;">&nbsp;&nbsp;The Managing Director say...&nbsp;&nbsp;</h2>
            Today it is not right to postpone investing in children further education until
            they become adults, nor wait till they reach Teen hood. In fact early learning
            is a vital phase of life in terms of their intellectual, emotional and social
            development. The lack of exposure and interaction during growing years can
            also negatively impact their development.<br><br>
            Enrolment in GSTA /The Apprentice Firm can be rewarding, not only the
            educational sense, but there's the opportunity to visit foreign destination,
            get international exposure, experience new culture, meet and interact with
            people from around the world, and make lifelong friends. And if you seek
            growth, you’ll find you can chart a rewarding career not only in land but also
            in cruise line Industry.<br><br>
            When most of us think about hospitality, we imagine our favorite restaurant or hotel. However, we don’t think about
            a potential career in that industry. Careers do not only include working in hotels and restaurants, but also on cruise
            ships, in casinos, as well as retail shops. At GSTA – The Apprentice Firm Career Academy, our Hotel and Restaurant
            Management Program will prepare you for a career in the hospitality industry.<br><br>
            GSTA program focuses on more than just the tactile skills you will need. In this program you will explore the business
            side of the service industry. As a student in the Hospitality Management program, you will study topics including
            sales management, marketing, personnel management and hospitality fundamentals. You will learn to process
            payments, handle emergencies, anticipate needs and organize large quantities of information and materials. Since
            work experience and on-the-job learning are a vital component to being successful in the hospitality industry, you
            will practice skills in the simulated hotel classroom and through work experiences such as internships.<br><br>
            Why you should consider a career in the service industry. There are many reasons why a career in hospitality may be
            for you!<br><br>
            The industry is stable. People will always need to eat, drink, and have somewhere to sleep. Even in an economy
            that may not be doing very well, the hospitality industry will still be secure. You also don’t have to worry about your
            degree becoming obsolete, because the hospitality industry will be around during the course of your lifetime (and
            beyond).<br><br>
            You also have ability to be a “people pleasure.” No matter how large or small your role in the industry is, you will be
            interacting with people and have the ability to make everyone happy.<br><br>
        </div>
        <div class="md-image fleft"><img src="images/md.jpg"></div>
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