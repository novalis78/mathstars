<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Math</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="/assets/plugins/switchery/switchery.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/assets/js/vendor/html5shiv.js"></script>
    <script src="/assets/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="main-wrapper" class="theme-default">
        <header id="header">
            
            <?php $this->load->view("backendviews/header_view");?>  

        </header>
        <!--sidebar left start-->
        <aside class="sidebar sidebar-left">
            
            <?php $this->load->view("backendviews/profile_view");?>            

            <?php $this->load->view("backendviews/sidenavbar_view");?>
            
        </aside>
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <div class="pageheader">

            <?php $this->load->view("backendviews/pageheader_view");?>

               
            </div>
            <section id="main-content" class="animated fadeInUp">
                 
                 
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Unit 1 - Types of Numbers</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-expand"></i>
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body" id="blockbody">
                                

                            </div>


                        </div>
                    </div>

                    </div> 




                <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body" id="blockbody">
                             <button type="button" class="btn btn-info btn-3d pull-left leftbtn">Previous</button><button type="button" class="btn btn-info btn-3d pull-right rightbtn">Next</button>
                        </div>
                </div>
                </div>

                </div> 

                
            </section>
        </section>
        <!--main content end-->
    </section>
    <!--sidebar right start-->
    <!--sidebar right end-->
    <!--Config demo-->
    <!--/Config demo-->
    <!--Global JS-->
    <script src="/assets/js/vendor/jquery-1.11.1.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/navgoco/jquery.navgoco.min.js"></script>
    <script src="/assets/plugins/switchery/switchery.min.js"></script>
    <script src="/assets/plugins/pace/pace.min.js"></script>
    <script src="/assets/plugins/fullscreen/jquery.fullscreen-min.js"></script>
    <script src="/assets/js/src/app.js"></script>
    <script>
    $( document ).ready(function() {
        
        var progress = <?=$profile->progress?>;
        $("#blockbody").load("/api/getBlock/<?=$profile->progress?>");

        $( ".leftbtn" ).on( "click", function() {
          progress -= 1;
          $("#blockbody").load("/api/getBlock/"+progress);
        });
        $( ".rightbtn" ).on( "click", function() {
          progress += 1;
          $("#blockbody").load("/api/getBlock/"+progress);
        });


    });
    </script>
</body>

</html>
