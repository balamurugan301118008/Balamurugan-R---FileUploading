<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploading</title>
</head>
<body>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <label>Name:</label>
        <input type="text" name="fileName" placeholder="Enter a name">
        <label>File Name:</label>
        <input type="file" name="fileImages">
        <input type="submit" name="submit">
    </form>
    <div class="imageContainer">
        <?php foreach ($fetchAll as $values):?>
        <h4><?php echo $values->id ?></h4>
        <h2><?php echo $values->fileName ?></h2>
        <img src= "<?php echo $values->file ?>" width="200" height="200" >
        <?php endforeach; ?>
    </div>
</body>
</html>