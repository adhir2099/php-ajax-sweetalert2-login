<?php

    try {
        $connect = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", "root", "");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        error_log("Database connection error: " . $e->getMessage());
        echo "Oops! Something terribly wrong happened.";    
        exit();
    }