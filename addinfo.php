<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NOTICE FORM</title>
</head>
<body>
    <form action="add.php" method="get">
    <div class="box">
        <label>TITLE:</label>
        <input name="title" type="text" placeholder="Enter the title" required>
        <label>NOTICE:</label>
        <textarea name="desc" type="text" placeholder="Enter the title" required></textarea>
        <label>DATE:</label>
        <input name="date" type="date" required >
        <button type="submit">ADD</button>
    </div>
    </form>
</body>
</html>