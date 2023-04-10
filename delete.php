<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="noticeboard";
    $conn= new mysqli($servername,$username,$password,$database);
    if( $res=$conn->connect_error){
        die("connection failed");
    }
    $id=$_GET['id'];
    $sql="DELETE FROM NOTICE  where id=$id; ";
    $res=$conn->query($sql);
    if($res===TRUE){
        header("location:index.php");
    }
    else{
        echo "Deletion failed";
    }
    ?>