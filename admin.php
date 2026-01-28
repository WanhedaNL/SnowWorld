<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<form action="upload_logic.php" method="POST" enctype="multipart/form-data">
    <h1>Admin Panel</h1>
    <select name="slot">
        <option value="left_top">left_top</option>
        <option value="left_bottom">left_bottom</option>
        <option value="center">center</option>
        <option value="right_top">right_top</option>
        <option value="right_bottom">right_bottom</option>
    </select>

    <input type="file" name="image" required>
    <button type="submit">submit</button>
</form>

 
</body>
</html>

