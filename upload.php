<?php
require 'connection.php';
$app['db'] = (new Database())->db;

if(($_POST['fileName'] !="")&& ($_FILES['fileImages']))
{
    $fileName = $_POST['fileName'];
    $fileImage = $_FILES['fileImages']['name'];
    $filePath = 'ImagesFolder/'.$fileImage;
    move_uploaded_file($_FILES['fileImages']['tmp_name'],$filePath);
    echo  "file upload successful";
    $insert = $app['db']->query("INSERT INTO file(fileName,file)VALUES('$fileName','$filePath')");
}
else{
    echo "please fill the inputs files";
}

$fetchFiles = ($app['db']->query("SELECT * FROM file"));
$fetchAll = $fetchFiles->fetchAll(PDO::FETCH_OBJ);
require 'index.php';