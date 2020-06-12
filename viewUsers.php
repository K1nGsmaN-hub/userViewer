<?php
    require_once 'connect.php';

    $connect = mysqli_connect($host, $login, $password, $dataBase) or die("You have a problem, Captain. You inputed incorrect data. Please, retry.");
    $query = mysqli_query($connect, 'SELECT secondName, firstName, thirdName FROM users');
    while ($row = mysqli_fetch_array($query)) {
        echo "<p class='text_description'>";
            echo $row['secondName'].' ';
            echo $row['firstName'].' ';
            echo $row['thirdName'].' ';
        echo "</p>";
    }
?>