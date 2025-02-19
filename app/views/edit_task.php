<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
    <h1>Edit Task</h1>
    <form action="" method="POST">
        <input type="text" name="title" value="<?= $data->title ?>"><br>
        <textarea name="description" id="" cols="30" rows="10"><?= $data->description ?></textarea><br>
        <input type="submit" value="Save" class="saveButton">
    </form>
    
</body>
</html>