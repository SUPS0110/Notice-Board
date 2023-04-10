<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NOTICE FORM</title>
</head>
<body>
    <form action="edit.php" method="get">
    <div class="box">
        <input name="id" type="number" value="<?php echo $_GET['id'];?>" hidden>
        <label>TITLE:</label>
        <input name="title" type="text" value="<?php echo $_GET['title'];?>" placeholder="Enter the title" required>
        <label>NOTICE:</label>
        <textarea name="desc" type="text" placeholder="Enter the title" required><?php echo $_GET['desc'];?></textarea>
        <label>DATE:</label>
        <input name="date" type="date" value="<?php echo $_GET['date'];?>" required>
        <button type="submit">EDIT</button>
    </div>
    </form>
</body>
</html>