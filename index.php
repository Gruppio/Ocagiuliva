<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OCAGIULIVA</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    
    <!-- Video CSS -->
    <link rel="stylesheet" href="css/video.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body id="page-top">
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68209912-1', 'auto');
  ga('send', 'pageview');

</script>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-brand-logo page-scroll" href="#page-top">
                    <!--img class="img-responsive" style="max-height:33px; margin-top: -7px;" src="img/simboloOcagiuliva.png"-->
                    OCAGIULIVA
                </a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        include 'php/localize.php'
                        
                        if isItalian()
                        { 
                            echo "<li><a class=\"page-scroll\" href=\"#home\">Home</a></li>";
                            echo "<li><a class=\"page-scroll\" href=\"#about\">La Società</a></li>";
                            echo "<li><a class=\"page-scroll\" href=\"#carnival\">Carnevale</a></li>";
                            echo "<li><a class=\"page-scroll\" href=\"#contact\">Contatti</a></li>";
                        }
                        else
                        {
                            echo "<li><a class=\"page-scroll\" href=\"#home\">Home</a></li>";
                            echo "<li><a class=\"page-scroll\" href=\"#about\">About us</a></li>";
                            echo "<li><a class=\"page-scroll\" href=\"#carnival\">Carnival</a></li>";
                            echo "<li><a class=\"page-scroll\" href=\"#contact\">Contacts</a></li>";
                        }
                    ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="wrapper">
    <!--header class="wrapper">
        
        <!--div class="header-content">
            <div class="header-content-inner wrapper">
                <!--div class="wrapper">
                    <img src="/img/background.jpg" class="img-responsive" alt="Responsive image">
                </div>
                <!--video autoplay loop muted poster="img/background.jpg" id="background">
                    <source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4">
                </video-->
                <!--div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <iframe class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header-->
    
    
    <section id="home" class="no-padding" style="padding-top:100px">
        <div class="container">
            <div class="col-lg-12">
                <!--div class="vid">
                    <iframe width="640" height="390" src="//www.youtube.com/embed/ac7KhViaVqc?autoplay=1&controls=0&showinfo=0&loop=1" frameborder="0"></iframe-->
                <img src="img/Oca.png" class="img-responsive center-block" style="padding: 25px 0px 25px 0px">
                <img src="img/Ocagiuliva.png" class="img-responsive center-block" style="padding: 25px 0px 80px 0px">
                <div class="embed-responsive embed-responsive-16by9">
                    <!--iframe class="embed-responsive-item" src="./Ocagiuliva.m4v" frameborder="0"></iframe-->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9-d08TXTkyA?autoplay=0&controls=1&showinfo=0&loop=1&rel=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>
                
                </div>
                <!--div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ac7KhViaVqc?autoplay=0&controls=0&showinfo=0&loop=1&rel=0&modestbranding=1" frameborder="0"></iframe>
                
                </div-->
            </div>
        </div>
    </section>
                
    <section class="no-padding" id="about">
        <div class="container-fluid">
            <div class="row visible-on">

                    <div class="col-lg-12 text-center about-us-image-desktop visible-lg">
                        <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#myModal" style="margin-top: 160px;">About Us</button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">About Us</h4>
                                        </div>
                                    <div class="modal-body">
                                        <p>Ocagiuliva is a non-profit organization, founded  in 2002, from the idea of some friends who wanted to create a new company to compete for the historical carnival competition of San Giovanni in Persiceto.(Bologna), namely spillo in italian. With modest means but  with forward-looking projects and ideas, all the members joined forces and expertise, spending time and money to climb for success.<br> 
The first challenge was to create something that people would get to known and appreciate, and also to create a truly competitive team, able to withstand the  high-quality array of teams in the town. Both challenges have been awarded with success through courage and passion. <br>
From the first year, Ocagiuliva collected quite high ranking positions, usually bringing triumph at the podioum.<br>
Over the years, Ocagiuliva members refined their painting technique, as well as their architectural and engineering ones, becoming more inventive, searching  for more sophisticated  and spectacular scenic transformations.<br>
<br>
In July 2015, the works of Ocagiuliva received the attentions of the international famed artist Mika. So they started a collaboration with him to prepare a part of the scenography for his world tour. <br>
The machine built by Ocagiuliva actually managed to fly from the streets of a little town, to the most important international stages like Paris, Rome, Amsterdam and more...<br>
Since then, Ocagiuilva however, mantaining the same carnival spirit of the beginning, has been using its growing and strengthened experience in the service of general entertainment. Giulive creations are peculiar specifically for their surprising transformations of its scenic elements.<br>
Basic ingredient for such work, is always Ocagiuliva’s filosophy, that moves every single project: creativity is  divine, dream is reality, imagination is prophecy, magic exists, art is life.<br>
<b>The show... is Ocagiuliva</b>.</p>
                                    </div>
                                    <!--div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div-->
                                </div>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-12 text-center about-us-image-mobile hidden-lg">
                        <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#myModal" style="margin-top: 160px;">About Us</button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">About Us</h4>
                                        </div>
                                    <div class="modal-body">
                                        <p>Ocagiuliva is a non-profit organization, founded  in 2002, from the idea of some friends who wanted to create a new company to compete for the historical carnival competition of San Giovanni in Persiceto.(Bologna), namely spillo in italian. With modest means but  with forward-looking projects and ideas, all the members joined forces and expertise, spending time and money to climb for success.<br> 
The first challenge was to create something that people would get to known and appreciate, and also to create a truly competitive team, able to withstand the  high-quality array of teams in the town. Both challenges have been awarded with success through courage and passion. <br>
From the first year, Ocagiuliva collected quite high ranking positions, usually bringing triumph at the podioum.<br>
Over the years, Ocagiuliva members refined their painting technique, as well as their architectural and engineering ones, becoming more inventive, searching  for more sophisticated  and spectacular scenic transformations.<br>
<br>
In July 2015, the works of Ocagiuliva received the attentions of the international famed artist Mika. So they started a collaboration with him to prepare a part of the scenography for his world tour. <br>
The machine built by Ocagiuliva actually managed to fly from the streets of a little town, to the most important international stages like Paris, Rome, Amsterdam and more...<br>
Since then, Ocagiuilva however, mantaining the same carnival spirit of the beginning, has been using its growing and strengthened experience in the service of general entertainment. Giulive creations are peculiar specifically for their surprising transformations of its scenic elements.<br>
Basic ingredient for such work, is always Ocagiuliva’s filosophy, that moves every single project: creativity is  divine, dream is reality, imagination is prophecy, magic exists, art is life.<br>
<b>The show... is Ocagiuliva</b>.</p>
                                    </div>
                                    <!--div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div-->
                                </div>
                            </div>
                          </div>
                    </div>
            </div>
        </div>
    </section>
        
    <section class="no-padding" id="carnival" style="padding-top:100px">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2015.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2015
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2014.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2014
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2013.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2013
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2012.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2012
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2011.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2011
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2010.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2010
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2009.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2009
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2008.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2008
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2007.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2007
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2006.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2006
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2005.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2005
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/FotoSpilli/2004.jpg" class="img-responsive" alt="#">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    2004
                                </div>
                                <div class="project-name">
                                    ...
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>+39 339 4879317</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">ocagiuliva.sangio@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>
        
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>