<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NOTICE FORM</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>
    <form action="add.php" method="get">
    <div class="box">
       <div class="list"><label>TITLE:</label>
        <input name="title" type="text" placeholder="Enter the title" required></div>
        <div class="list"><label>NOTICE:</label>
        <textarea name="desc" type="text" placeholder="Enter the title" required></textarea></div>
        <div class="list"><label>DATE:</label>
        <input name="date" type="date" required ></div>
        <div class="click"><button type="submit">ADD</button></div>
    </div>
    </form>
</body>
</html>