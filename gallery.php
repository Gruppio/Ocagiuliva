<!DOCTYPE html>

<?php 
    include_once './php/Localize.php';
    include_once './php/DescriptionManager.php';
?>

<?php
    $year           = $_GET["year"];
    $italian        = isItalian();
    $title          = getTitleForYear($year, $italian);
    $description    = getDescriptionForYear($year, $italian);
    $video          = getVideoForYear($year);  
?>

<?php                    
    if ($italian)
    { 
        echo "<html lang=\"it\">";
    }
    else
    {
        echo "<html lang=\"en\">";
    }
?>




<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo "$year"; ?></title>

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
    
    <!-- Gallery CSS -->
    <link rel="stylesheet" href="css/gallery.css" type="text/css">

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
  ga('send', 'gallery');

</script>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand navbar-brand-logo page-scroll" href="index.php">
                    <!--img class="img-responsive" style="max-height:33px; margin-top: -7px;" src="img/simboloOcagiuliva.png"-->
                    OCAGIULIVA
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="wrapper">    
        <section id="home" class="no-padding" style="padding-top:100px">
            <div class="container">
              <div class="row">
                <h1><?php echo $title ?></h1>
                  <p style="padding-top:20px"><?php echo $description ?></p>
                  <?php
        
                    // Video
                    if ($video != "")
                    {   
                        echo "<div class=\"col-lg-12\" style=\"padding-top:20px;padding-bottom:20px\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"$video?autoplay=0&controls=1&showinfo=0&loop=1&rel=0&modestbranding=1\"></iframe></div></div>";
        //echo "<div class=\"col-lg-12\"><iframe width=\"560\" height=\"315\" src=\"$video?autoplay=0&controls=1&showinfo=0&loop=1&rel=0&modestbranding=1\" frameborder=\"0\" allowfullscreen></iframe></div>";
                    }

                    if ($handle = opendir("./img/FotoSpilli600x350/$year")) 
                    {
                        while (false !== ($entry = readdir($handle))) 
                        {
                            if ($entry != "." && $entry != "..") 
                            {
                                echo "<div class=\"col-lg-3 col-sm-4 col-xs-12\"><a title=\"$title\" href=\"#\"><img class=\"thumbnail img-responsive\" src=\"/img/FotoSpilli600x350/$year/$entry\"></a></div>";
                            }
                        }
                        closedir($handle);
                    }
                    /*
                    for ($i = 0; $i < 10; $i ++)
                    {
                        echo "<div class=\"col-lg-3 col-sm-4 col-xs-12\"><a title=\"$title\" href=\"#\"><img class=\"thumbnail img-responsive\" src=\"//placehold.it/600x350\"></a></div>";
                    }*/
                    ?>
                <hr>

                <hr>
              </div>
            </div>
            <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Heading</h3>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
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
    <script src="js/gallery.js"></script>

</body>

</html>
