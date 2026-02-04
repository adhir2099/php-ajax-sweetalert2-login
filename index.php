<html>  
    <head>
        <title>PHP ajax sweetalert2 login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="adhir2099" />
        <meta name="description" content="PHP ajax sweetalert2 login with no Jquery" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/custom.css" rel="stylesheet" />
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/fontawesome.js"></script>
        <script src="assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>  
    </head>  

    <body class="d-flex flex-column min-vh-100">  
        <span id="forkongithub"><a href="https://github.com/adhir2099/php-ajax-sweetalert2-login">Fork me on GitHub</a></span> 
        
        <section class="container mb-5 py-5">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5"><i class="fas fa-star"></i>Sign in<i class="fas fa-star"></i></h2>
                
            <div class="col-lg-5 mx-auto py-5">

                <div class="d-flex justify-content-center">
                    <p id="loading_spinner">
                        <img src="http://talkerscode.com/webtricks/demo/images/loader1.gif">
                    </p>
                </div>

                <form class="row g-3 d-flex justify-content-center rounded glass" method="post" id="loginForm">
                    <div class="col-auto">
                        <label for="staticEmail2" class="visually-hidden">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" name="login" value="LOGIN" id="login_button">SIGN IN</button>
                    </div>
                </form>

            </div>
        </section>
        
        <div class="py-3 text-end text-black mt-auto">
            <div class="container"><small>PHP ajax sweetalert2 login © 2026 </small> <a href="https://github.com/adhir2099/php-ajax-sweetalert2-login"><i class="fab fa-github-alt"></i></a></div>
        </div>
        <script src="assets/js/scripts.js"></script>
    </body>  
</html> 