<?php
    session_start();
    include('./dbcon.php');

    if(isset($_POST['do_login'])){
    
        $email = $_POST['email'];
        $pass  = $_POST['pass'];

        $statement = $connect->prepare("SELECT * FROM users WHERE email = :email and pass = :pass"); 
        $statement->execute(
            array(  
                    'email' => $_POST["email"],
                    'pass'  => $_POST["pass"]
                )  
            );
        $result = $statement->fetchAll();
        
        if(sizeof($result)>0){
            foreach($result as $row){
                $_SESSION["email"]   = $_POST["email"];
                echo "success";
            }
        }else{
            echo "fail";
        }
    }
?>