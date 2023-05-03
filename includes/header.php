<!DOCTYPE html>
<html lang="en">

<head>
    <title>The - Hijazi</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

</head>

<body class="app">

    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    role="img">
                                    <title>Menu</title>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div><!--//col-->

                        <div class="search-mobile-trigger d-sm-none col">
                            <i class="search-mobile-trigger-icon fas fa-search"></i>
                        </div><!--//col-->

                        <div class="app-search-box col">
                            <form class="app-search-form">
                                <input type="text" placeholder="Search..." name="search"
                                    class="form-control search-input">
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </div><!--//app-search-box-->

                        <div class="app-utilities col-auto">

                            <div class="app-utility-item app-user-dropdown dropdown">

                                <div id="clock" style="font-weight: bold;">
                                    <?php echo date('h:i:s A'); ?>
                                </div>

                            </div><!--//app-user-dropdown-->
                        </div><!--//app-utilities-->

                    </div><!--//row-->
                </div><!--//app-header-content-->
            </div><!--//container-fluid-->
        </div><!--//app-header-inner-->

        <?php include 'includes/menu.php'; ?>

    </header><!--//app-header-->

    <div class="app-wrapper">