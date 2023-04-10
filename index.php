<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICEBOARD</title>
    <link rel="stylesheet" href="./style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>   
</head>
<body>
    <div class="box">
        <div class="school"><h3>DREAM HIGH SCHOOL</h3></div>
<div class="head"><h1>NOTICE</h1></div>
<div class="add"><a href="./addinfo.php">Add Notice</a></div>
    </div>
    <div class="container">
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="noticeboard";
    $conn= new mysqli($servername,$username,$password,$database);
    if( $res=$conn->connect_error){
        die("connection failed");
    }
    $sql="SELECT * FROM NOTICE";
    $res=$conn->query($sql);
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            ?>
            <div class="notice">
            <div class="id"><b><?php echo $row['id']; ?>. <?php echo $row['title'];?>:</b></div>
            <div class="desc"><?php echo $row['description'];?></div>
            <div class="date"><?php echo $row['date']; ?></div>
            <div class="modify">
                <a href="./editinfo.php?id=<?php echo $row['id'];?>&title=<?php echo $row['title'];?>&date=<?php echo $row['date'];?>&desc=<?php echo $row['description'];?>"><i class='fas fa-pen' style='font-size:15px'></i></a>
                <a href="./delete.php?id=<?php echo $row['id'];?>"><i class='far fa-trash-alt' style='font-size:15px'></i></a>
            </div>
            </div>
            <?php
        }
    }
    ?>
    </div>
</body>
</html>