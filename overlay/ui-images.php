<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webstrot Admin : UI Element Basic</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="">
</head>

<body class="sidebar-hide">

    <?php include 'header1.php' ?>
    <!-- /# sidebar -->

    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Webstrot Admin</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib"><a href="#search"><i class="ti-search"></i></a></li>
                <li class="header-icon dib"><i class="ti-bell"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">5 members joined today </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">likes a photo of you</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><i class="ti-email"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">2 New Messages</span>
                            <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mr. Ajay</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar"> Ajay <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Upgrade Now</span>
                            <p class="trial-day">30 Days Trail</p>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                <li><a href="#"><i class="ti-wallet"></i> <span>My Balance</span></a></li>
                                <li><a href="#"><i class="ti-write"></i> <span>My Task</span></a></li>
                                <li><a href="#"><i class="ti-calendar"></i> <span>My Calender</span></a></li>
                                <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                                <li><a href="#"><i class="ti-help-alt"></i> <span>Help</span></a></li>
                                <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">UI-Images</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div style="text-align:end;">
                            <a href="slider-edit.php"><button class="btn btn-primary mr-auto" >ADD Slider</button></a>
                        </div>
                        <?php
                        include 'assets/includes/database.php';
                        $sql = "SELECT * FROM slider ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $i = 1;
                            while ($row = $result->fetch_assoc()) { ?>
                                <div class="col-lg-12">
                                    <div class="card-header text-center">
                                        <h2>Slider <?php echo $i++ ?></h2>
                                    </div>
                                    <div class="card alert" style="display: flex; gap: 15px;">
                                        <div class="card-body">
                                            <p class="text-muted m-b-15">Main image</p>
                                            <img src="<?php echo $row['main_img'] ?>" class="img-rounded img-responsive" width="400px" alt="Cinque Terre">
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted m-b-15">Float img-1</p>
                                            <img src="<?php echo $row['f1'] ?>" class="img-rounded img-responsive" width="400px" alt="Cinque Terre">
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted m-b-15">Float img-2</p>
                                            <img src="<?php echo $row['f2'] ?>" class="img-rounded img-responsive" width="400px" alt="Cinque Terre">
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted m-b-15">Float img-3</p>
                                            <img src="<?php echo $row['f3'] ?>" class="img-rounded img-responsive" width="400px" alt="Cinque Terre">
                                        </div>
                                        <div>
                                            <form action="" class="input-edit ">
                                                <label for="">Title</label>
                                                <input type="text" value="<?php echo $row['title'] ?>" placeholder="Heading-1"><br>

                                                <label for="">Heading</label>
                                                <input type="text" value="<?php echo $row['heading'] ?>" placeholder="Heading-2"><br>

                                                <label for="">Paragraph</label>
                                                <input type="text" value="<?php echo $row['paragraph'] ?>" placeholder="Heading-3">
                                            </form>
                                            <?Php echo "<a href='slider-edit.php?edit_id=" . $row['id'] . "' class='btn btn-primary btn-lg btn-rounded m-b-10 m-l-5'>Edit</a>"; ?>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } else {
                            echo 'no record found';
                        } ?>
                        <!-- /# column -->
                        <!-- /# column -->
                        <div class="col-lg-12">
                            <div class="card alert" style="display: flex; gap: 15px;">
                                <div class="card-header">
                                    <h4>Section-</h4>
                                </div>
                                <div class="card-body">
                                    <img src="assets/images/sanfran.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre">
                                </div>
                                <div>
                                    <form action="" class="input-edit" style="display: flex; gap: 50px;">
                                        <div style="flex: 1;">
                                            <div style="margin-bottom: 20px;">
                                                <label for="title">Title</label><br>
                                                <input type="text" id="title" name="title" placeholder="Title">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label for="heading">Heading</label><br>
                                                <input type="text" id="heading" name="heading" placeholder="Heading">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label for="paragraph">Paragraph</label><br>
                                                <input type="text" id="paragraph" name="paragraph" placeholder="Paragraph">
                                            </div>
                                        </div>

                                        <div style="flex: 1;">
                                            <div style="margin-bottom: 20px;">
                                                <label for="companies">Companies</label><br>
                                                <input type="text" id="companies" name="companies" placeholder="Companies">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label for="colors">Colors</label><br>
                                                <input type="text" id="colors" name="colors" placeholder="Colors">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label for="range">Range</label><br>
                                                <input type="text" id="range" name="range" placeholder="Range">
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <label for="offers">Offers</label><br>
                                                <input type="text" id="offers" name="offers" placeholder="Offers">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-">
                                <div class="card alert" style="display: flex; gap: 15px;">
                                    <div class="card-header">
                                        <h4>Latest Collection Section-</h4>
                                    </div>
                                    <div class="card-body">
                                        <img src="assets/images/sanfran.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre">
                                    </div>
                                    <div>
                                        <form action="" class="input-edit" style="display: flex;">

                                            <div style="flex: 1;">
                                                <div style="margin-bottom: 20px;">
                                                    <label for="title">Title</label><br>
                                                    <input type="text" id="title" name="title" placeholder="Title">
                                                </div>

                                                <div style="margin-bottom: 20px;">
                                                    <label for="heading">Heading</label><br>
                                                    <input type="text" id="heading" name="heading" placeholder="Heading">
                                                </div>

                                                <div style="margin-bottom: 20px;">
                                                    <label for="paragraph">Paragraph</label><br>
                                                    <input type="text" id="paragraph" name="paragraph" placeholder="Paragraph">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <!-- /# column -->
                            </div>
                            <!-- /# row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card alert">
                                        <div class="card-header">
                                            <h4>Image Gallery</h4>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted m-b-15">You can also use Bootstrap's grid system in conjunction with the <code>.thumbnail</code> class to create an image gallery.</p>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="thumbnail">
                                                        <a href="assets/images/lights.jpg">
                                                            <img class="w-100" src="assets/images/lights.jpg" alt="Lights">
                                                            <div class="caption">
                                                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="thumbnail">
                                                        <a href="assets/images/nature.jpg">
                                                            <img class="w-100" src="assets/images/nature.jpg" alt="Nature">
                                                            <div class="caption">
                                                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="thumbnail">
                                                        <a href="assets/images/fjords.jpg">
                                                            <img class="w-100" src="assets/images/fjords.jpg" alt="Fjords">
                                                            <div class="caption">
                                                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# column -->
                            </div>
                            <!-- /# row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="footer">
                                        <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div id="search">
                <button type="button" class="close">×</button>
                <form>
                    <input type="search" value="" placeholder="type keyword(s) here" />
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- jquery vendor -->
            <script src="assets/js/lib/jquery.min.js"></script>
            <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
            <!-- nano scroller -->
            <script src="assets/js/lib/menubar/sidebar.js"></script>
            <script src="assets/js/lib/preloader/pace.min.js"></script>
            <!-- sidebar -->
            <script src="assets/js/lib/bootstrap.min.js"></script>
            <!-- bootstrap -->


            <!--  Chart js -->
            <!--  Chart js -->
            <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
            <script src="assets/js/lib/chart-js/chartjs-init.js"></script>
            <!-- // Chart js -->
            <!-- // Chart js -->
            <script src="assets/js/scripts.js"></script>
            <!-- scripit init-->





</body>

</html>