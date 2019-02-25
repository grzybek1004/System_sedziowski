<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>System sędziowski</title>
        <meta name="author" content="Jakub Grzybowski">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div id="head">
        <a href="index.php" id="arrow"><div class="triangle-left"></div></a>
        <div id="title">
                    TMP 2018
        </div>
         
        <?php
            $config = require_once 'config.php';

            $conn = new mysqli($config['host'], $config['user'], $config['password'], $config['dbname']);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            echo "Connected successfully";
            
            $conn->close();
        ?>
         
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
