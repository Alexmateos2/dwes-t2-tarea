<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        require_once "./clases/TriangleGenerator.php";
        $triangulo = TriangleGenerator::generateTriangle(6);
        echo"". $triangulo ."";
    ?>
</body>
</html>