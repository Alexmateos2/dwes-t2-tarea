<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $libros = [  
        "libro1" => [  
            "titulo" => "PHP para Principiantes",  
            "autor" => "Carlos Ruiz",  
            "precio" => 19.99,  
            "categoria" => "Desarrollo web"  
        ],  
        "libro2" => [  
            "titulo" => "JavaScript Avanzado",  
            "autor" => "Laura García",  
            "precio" => 25.99,  
            "categoria" => "Desarrollo web"  
        ],  
        "libro3" => [  
            "titulo" => "Algoritmos en Python",  
            "autor" => "Miguel Fernández",  
            "precio" => 29.99,  
            "categoria" => "Algoritmos"  
        ]  
    ];
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro): ?>
            <tr>
                <td><?php echo $libro['titulo']; ?></td>
                <td><?php echo $libro['autor']; ?></td>
                <td><?php echo $libro['precio']; ?></td>
                <td><?php echo $libro['categoria']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
