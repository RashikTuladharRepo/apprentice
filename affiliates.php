<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>OUR AFFILIATES | THE APPRENTICE FIRM</title>


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
    <div class="contentheaderimageholder"><img src="images/affiliates.jpg" width="100%" height="400px"></div>
</div>
<!--contentheaderimagewrapper wrapper ends-->




<!--otherpagecontentwrapper wrapper starts-->
<div class="otherpagecontentwrapper">

    <div class="otherpagesecondnavwrapper">
        <div class="otherpagesecondnav">
            <ul id="menu">
                <li><a href="javascript:void(0)" class="active">&nbsp;&nbsp;Our Affiliates&nbsp;&nbsp;</a></li>
            </ul>

        </div>
    </div>
    <div class="clearfix"></div>

    <div class="otherpagecontentholder">

        <div style="text-align: center; color:gray; font-size: 32px; font-family: rashik;">The World-Class Industry Affiliates</div><br><br>




        <div class="affiliates-image fleft"><img src="images/affiliates/1.png"></div>
        <div class="affiliates-content fleft">
            <h2 style="color:#FFBC4B; font-family:rashik; font-size: 30px; font-weight:100;">Star Cruises</h2>
            <hr style="opacity: 0.4;">
            Star Cruises, the leading cruise line in Asia-Pacific. Star Cruises,
            together with Norwegian Cruise Line (NCL), is the third largest cruise
            operator in the world that owns a combined fleet of 18 ships visiting
            over 200 destinations in the world, offering approximately 35,000
            lower berths.
        </div>
        <div class="affiliates-image fleft"><img src="images/affiliates/11.png"></div>
        <div class="clearfix"></div>




        <div class="affiliates-image fleft"><img src="images/affiliates/2.png"></div>
        <div class="affiliates-content fleft">
            <h2 style="color:#FFBC4B; font-family:rashik; font-size: 30px; font-weight:100;">Resorts World Manila (RWM)</h2><hr style="opacity: 0.4;">
            is Genting Hong
            Kong's first foray in a land-based attraction. RWM
            opened its doors to the public in August 2009, and is
            one of the premier leisure brands under the Genting
            Group, representing a flagship integrated leisure and
            entertainment complex featuring 3 hotels including a
            six star all-suite Maxims Hotel, an iconic shopping mall,
            4 high-end cinemas and a multi-purpose performing arts
            theatre.
        </div>
        <div class="affiliates-image fleft"><img src="images/affiliates/22.png"></div>
        <div class="clearfix"></div>



        <div class="affiliates-image fleft"><img src="images/affiliates/3.png"></div>
        <div class="affiliates-content fleft">
            <h2 style=" font-weight:100;color:#FFBC4B; font-size: 30px; font-family:rashik;">Maxims Tower</h2>        <hr style="opacity: 0.4;">
            is the all-suite luxury hotel in the
            Philippines, setting the benchmark for high-end
            accommodations in the country. Catering to guests with
            the most discerning tastes, this first-class city retreat is
            equipped with 172 spacious and lavishly-furnished suites.
            Complementing the plush amenities is its impeccable,
            personalized service. Each room is assigned a butler to
            attend to the guests’ every need, from their itinerary to
            dining reservations, 24 hours a day.
        </div>
        <div class="affiliates-image fleft"><img src="images/affiliates/33.png"></div>
        <div class="clearfix"></div>


        <div class="affiliates-image fleft"><img src="images/affiliates/4.png"></div>
        <div class="affiliates-content fleft">
            <h2 style=" font-weight:100; font-size: 30px; color:#FFBC4B; font-family:rashik;">Remington Hotel</h2>        <hr
                style="opacity: 0.4;">
            in Pasay City, Philippines incorporates affordability with stylish class and outstanding convenience, providing holidaymakers with a comfortable
            escape amid the fabulous Resorts World Manila. The 3-star hotel has over 700 rooms designed to transcend
            guests’ expectations by giving them an unruffled haven. Each Rooms comes complete with Internet access, a
            generous space for lounging and sleep, and appointments that betray the budget-friendly rates. Additionally, the
            in-house facilities and services ensure a convenient stay. Set in Metro Manila’s newest entertainment complex,
            the hotel also offers visitors world-class entertainment options, such as a casino, deluxe mall, and cinemas.
        </div>
        <div class="affiliates-image fleft"><img src="images/affiliates/44.png"></div>
        <div class="clearfix"></div>

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