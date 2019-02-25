<?php
$config = require_once '../config.php';
echo $_POST["scoret"].$_POST["scorep"];
$scoret = $_POST["scoret"];
$scorep = $_POST["scorep"];
$id = $_POST["id"];
$conn = new mysqli($config['host'], $config['user'], $config['password'], $config['dbname']);
if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            echo "Connected successfully";

$sql = "INSERT INTO wyniki"."(Nr,Technika_1,Prezentacja_1)".
        "VALUES"."('$id','$scoret','$scorep')".
        "ON DUPLICATE KEY UPDATE". "`Technika_1`='$scoret',`Prezentacja_1`='$scorep'";
$result = $conn->query($sql);
$conn->close();