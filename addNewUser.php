<?php
    $secondName = $_POST['secondName'];
    $firstName = $_POST['firstName'];
    $thirdName = $_POST['thirdName'];

    require_once 'connect.php';

    $connect = mysqli_connect($host, $login, $password, $dataBase) or die("You have a problem, Captain. You inputed incorrect data. Please, retry.");
    $query = "INSERT INTO users SET secondName='".$secondName."', firstName='".$firstName."', thirdName='".$thirdName."'";
    mysqli_query($connect, "INSERT INTO users SET secondName='".$secondName."', firstName='".$firstName."', thirdName='".$thirdName."'");
    header('Location: index.php');
?>