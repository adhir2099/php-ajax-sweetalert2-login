<?php
    session_start();
    $mail = $_SESSION["email"];

    if(!isset($_SESSION["email"])){ 
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
        <meta name="author" content="adhir2099" />
        <meta name="description" content="PHP ajax sweetalert2 login" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/custom.css" rel="stylesheet" />
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/fontawesome.js"></script>  
    </head>   

    <body class="d-flex flex-column min-vh-100">

        <span id="forkongithub"><a href="https://github.com/adhir2099/php-ajax-sweetalert2-login">Fork me on GitHub</a></span>
        
        <section class="container mb-5 py-5">

            <div class="mb-5"></div>
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5"><i class="fas fa-star"></i>Welcome<i class="fas fa-star"></i></h2>
            <div class="d-flex justify-content-center text-uppercase">
                <p class="lead mb-0"><strong><?php echo  $mail; ?></strong></p>
            </div>
            <div class="d-flex justify-content-center mb-5 py-5">
              <a class="btn btn-primary btn-lg" href="./logout.php">Sign out</a>  
            </div>
            

        </section>

        <div class="py-3 text-end text-black mt-auto">
            <div class="container"><small>PHP ajax sweetalert2 login © 2023 </small> <a href="https://github.com/adhir2099/php-ajax-sweetalert2-login"><i class="fab fa-github-alt"></i></a></div>
        </div>
    </body>
</html>