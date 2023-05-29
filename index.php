<html>  
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
        <script src="assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>  
    </head>  

    <body class="d-flex flex-column min-vh-100">  
        <span id="forkongithub"><a href="https://github.com/adhirsaurio/php-ajax-sweetalert2-login">Fork me on GitHub</a></span> 
        
        <div class="container mb-5">  
            
            <section class="page-section mb-0" id="contact">
                <div class="container">
                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Log in</h2>
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="text-center">
                                <p id="loading_spinner">
                                    <img src="http://talkerscode.com/webtricks/demo/images/loader1.gif">
                                </p>
                            </div>
                            <form method="post" class="border rounded glass" id="loginForm">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                        <label>Email</label>
                                        <input class="form-control" name="email" id="email" type="text" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                        <label>Password</label>
                                        <input class="form-control" name="pass" id="pass" type="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary btn-xl" type="submit" name="login" value="LOGIN" id="login_button">LOG IN</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <div class="copyright py-4 text-center text-white mt-auto">
            <div class="container"><small>PHP ajax sweetalert2 login © 2023</small> <a href="https://github.com/adhirsaurio/php-ajax-sweetalert2-login"><i class="fab fa-github-alt"></i></a></div>
        </div>
    
    </body>  
</html> 

<script>
    $("#loginForm").on('submit', function(e){
            e.preventDefault();
            let email = $("#email").val();
            let pass  = $("#pass").val();
             
             if(email == "" || pass == ""){  
                $(document).ready(function(){
                    Swal.fire({
                        toast: true,
                        icon: 'warning',
                        title: 'All fields are required',
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    }) 
                });
             }else{

                $("#loading_spinner").css({"display":"block"});
                $.ajax({
                method:'POST',
                url:'loginController.php',
                data:{do_login:"do_login",email:email,pass:pass},
                success:function(response) {
                    if(response=="success"){
                        window.location.href="home.php";
                    }else{
                        $("#loading_spinner").css({"display":"none"});
                        $(document).ready(function(){
                            Swal.fire({
                                toast: true,
                                icon: 'error',
                                title: 'Wrong User/email or password',
                                position: 'top',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })
                        });
                    }
                }
            });
        }
    });
</script>