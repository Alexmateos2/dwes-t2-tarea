<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<?php
class TriangleGenerator {
    public static function generateTriangle(int $altura): string {
        if ($altura < 0) {
            return ''; 
        }
        $triangle = ''; 
    
        for ($i = 1; $i <= $altura; $i++) {
          
            $spaces = str_repeat('&nbsp;', $altura );
    
        
            $triangle .= "<p>" . $spaces . str_repeat('*', $i) . "</p>";
        }
    
        return $triangle;
    }
}
?>
</body>
</html>
