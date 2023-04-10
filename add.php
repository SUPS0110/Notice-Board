<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="noticeboard";
    $conn= new mysqli($servername,$username,$password,$database);
    if( $res=$conn->connect_error){
        die("connection failed");
    }
    $title=$_GET['title'];
    $date=$_GET['date'];
    $desc=$_GET['desc'];
    $sql="INSERT INTO NOTICE SET title='$title',date='$date',description='$desc'; ";
    $res=$conn->query($sql);
    if($res===TRUE){
        header("location:index.php");
    }
    else{
        echo "Addition failed";
    }
    ?>