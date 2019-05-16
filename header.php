<?php 
// header('Content-Type: text/html; charset=UTF-8');
// header('Content-Type: text/plain; charset=UTF-8');
header('Content-Disposition: attachment; filename="download.txt"');
readfile('./text.txt');
    // header('HTTP/1.0 404 Not Found');
    // header('HTTP/1.0 304 Not Modified');
    // header('Location: redirect.php');
    // header('refresh: 5; url=redirect.php');
    // die;
    exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
</body>
</html>