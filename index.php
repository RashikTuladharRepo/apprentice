<?php
    include"includes/database.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>THE APPRENTICE FIRM</title>


    <!--Main Style and Metro Css-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/iconFont.css">
    <!--Main Style and Metro Css-->

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

    <link rel="icon" href="images/logo.png" type="image/png">

    <!-- Tickr -->
    <link href="style/global.css" rel="stylesheet" type="text/css" />
    <!--<script src="script/jquery.min.js"></script>-->
    <!-- End Tickr -->

    <link rel="stylesheet" type="text/css" href="style/demo.css" />
    <link rel="stylesheet" type="text/css" href="style/common.css" />
    <link rel="stylesheet" type="text/css" href="style/style3.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="script/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->


    <style type="text/css">
        .fb-wrap {width:50%;margin: 0 auto;}
        .fb-like-box, .fb-like-box span, .fb-like-box span iframe[style] { width: 100% !important; }
    </style>


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



<div class="quote">
    <img src="images/logo.png"><br>
    The Apprentice Frim Hotel & Cruising Training Centre (AHCTC)<br>
    <span>"Come & Explore And Be A Part of Education & Fun Where The World Is Your Work Place"</span>
</div>


	<!--Header wrapper starts-->
	<div class="headerwrapper">
        <!--Header starts-->
        <div class="header">
            <!--Logo Container starts-->
            <!-- <div class="headerleft fleft"></div> -->
            <!--Logo Container ends-->
            <!--Menu Container starts-->
                    <?php include"includes/navigation.php"; ?>
            <!--Menu Container ends-->
            <div class="clearfix"></div>
        </div>
        <!--Header ends-->
    </div>
    <!--Header wrapper ends-->



<!--slider wrapper starts-->
    <div class="sliderwrapper">
        <div style="margin:auto;max-width:1235px;z-index: 1;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:15px auto 32px; width: 1250px;">
            <ul class="amazingslider-slides" style="display:none;">
                <?php
                    $sql1="select * from tbl_slider ORDER BY id LIMIT 5";
                    $qry1=mysqli_query($con,$sql1);
                    while($row1=mysqli_fetch_array($qry1))
                    {
                ?>
                <li>
                    <img src="adminpanel/images/slider/<?php echo $row1['image']; ?>" alt="" data-description=""/>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        </div>
    </div>
<!--slider wrapper ends-->



<!--Immediate Vacancy-->
<div class="immediatevacancywrapper">
    <div class="topicwrapper"><div class="topic">Our Faculties, Certification Body And Affiliates</div></div>
    <div class="immediatevacancy">
                    <section class="main">
            
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">   
                            <div class="ch-info">
                                <h3>Managing Director say...</h3>
                                <p><a href="mdsay.php">Read More</a></p>
                            </div>
                            <div class="ch-thumb ch-img-1"></div>
                        </div>
                    </li>

                    <li>
                        <div class="ch-item">   
                            <div class="ch-info">
                                <h3>Our Faculties</h3>
                                <p><a href="faculty.php">Read More</a></p>
                            </div>
                            <div class="ch-thumb ch-img-2"></div>
                        </div>
                    </li>

                    <li>
                        <div class="ch-item">   
                            <div class="ch-info">
                                <h3>Our Partner And Certifiaction Body</h3>
                                <p><a href="certification.php">Read More</a></p>
                            </div>
                            <div class="ch-thumb ch-img-3"></div>
                        </div>
                    </li>

                    <li>
                        <div class="ch-item">   
                            <div class="ch-info">
                                <h3>Our Partner Affiliates</h3>
                                <p><a href="affiliates.php">Read More</a></p>
                            </div>
                            <div class="ch-thumb ch-img-4"></div>
                        </div>
                    </li>
                </ul>
                
            </section>


      <!--   <section class="main">
            <ul class="ch-grid">
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <h3 style="font-size: 13px;">The Managing Director say...</h3>
                            <p><a href="mdsay.php">Read More</a></p>
                        </div>
                        <div class="ch-thumb"><img src="images/md-cir.jpg"></div>
                    </div>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <h3 style="font-size: 13px;">Our Faculties</h3>
                            <p><a href="faculty.php">Read More</a></p>
                        </div>
                        <div class="ch-thumb"><img src="images/fac-cir.jpg"></div>
                    </div>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <h3 style="font-size: 13px;">Our Certification Body</h3>
                            <p><a href="certification.php">Read More</a></p>
                        </div>
                        <div class="ch-thumb"><img src="images/cer-cir.jpg"></div>
                    </div>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <h3 style="font-size: 13px;">Our Affiliates</h3>
                            <p><a href="affiliates.php">Read More</a></p>
                        </div>
                        <div class="ch-thumb"><img src="images/afi-cir.jpg"></div>
                    </div>
                </li>
            </ul>
        </section> -->
    </div>
</div>
<!--Immediate Vacancy Ends-->


<!--thirdcontainer wrapper starts-->
<div class="thirdcontainerwrapper">

    <div class="thirdcontainer">

<!--<div class="leftcontent fleft">WHAT OUR MANAGING DIRECTOR HAS TO SAY?<img src="images/whyapprentice.jpg"></div>-->

        <div class="centercontent fleft">
            <a href="requirements.php">WHAT ARE THE ADMISSION REQUIREMENTS?<img src="images/ourcourses.jpg"></a>
        </div>

        <div class="leftcontent fleft">
            LATEST NEWS FEEDS
            <hr style="color: gray; opacity: 0.2;">
            <ul id="ticker_02" class="ticker">

                <?php
                    $sql="select * from tbl_news ORDER BY date DESC LIMIT 5";
                    $qry=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($qry)) 
                    {
                ?>
                <li>
                    <h3  style="word-break:break-all;"><?php echo $row['title']; ?></h3>
                    <p style="word-break:break-all;">Published On : <?php echo $row['date']; ?></p>
                    <p style="word-break:break-all;"><?php echo substr($row['description'],1,100);?>&nbsp;&nbsp;<a href="news.php?nid=<?php echo $row['id'];?>">Read More&raquo;</a></p>
                    <hr style="color:rgba(0,0,0,0.3); width:300px;">
                </li>
                <?php
                    }
                ?>

            </ul>


            <script>
                function tick2()
                {
                    $('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
                }
                setInterval(function(){ tick2 () }, 3000);
            </script>

        </div>

        <div class="rightcontent fleft">
            FIND US ON FACEBOOK
            <div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="100%" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!--thirdcontainer wrapper ends-->


<!--fourth wrapper starts-->
<div class="fourthcontainerwrapper">
    <?php include"includes/fourthcontent.php"; ?>
</div>
<!--fourth wrapper ends-->


<!--footerwrapper starts-->
<div class="footerwrapper">
    <?php include"includes/footer.php"; ?>
</div>
<!--footerwrapper ends-->

</body>
</html>