<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Hello, 
        <?php 
            $a = "hello";
            $$a = "world";
            echo "$a  1 {$hello}";
        ?>
    </h1>
</body>
</html>