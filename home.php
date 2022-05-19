<?php
    session_start();
    $mail = $_SESSION["email"];

    if(!isset($_SESSION["email"]))
    { 
        print "<meta http-equiv='refresh' content='0;url=index.php'>";
        exit;
    } 
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>PHP ajax sweetalert2 login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="Adhirsaurio" />
        <meta name="description" content="PHP ajax sweetalert2 login" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/fontawesome.js"></script>  
    </head>   

    <body id="page-top" class="d-flex flex-column min-vh-100">

        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Log in Success</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary btn-lg" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <span id="forkongithub"><a href="https://github.com/adhirsaurio/cawfy-template">Fork me on GitHub</a></span>
        
        <section class="page-section">
            <div class="container text-center">
                
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Success</h2>
                <p class="lead mb-0"> Welcome  <strong>@<?php echo  $mail; ?></strong> </p>
                
            </div>
        </section>

        <div class="copyright py-4 text-center text-white mt-auto">
            <div class="container"><small>PHP ajax sweetalert2 login © 2022</small> <a href="https://github.com/adhirsaurio?tab=repositories"><i class="fab fa-github-alt"></i></a></div>
        </div>
    </body>
</html>