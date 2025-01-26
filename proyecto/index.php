<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
</head>
    <?php
     require "./clases/Alumno.php";
     $alumnos = Alumno::crearAlumnosDeMuestra();
     ?>
<body>
    <h1>Alumnos:</h1>
    <ul>
        <?php
       

        foreach ($alumnos as $alumno) {
            echo "<li> 
               
                Nombre: {$alumno->getName()} {$alumno->getApellidos()},   
                 Email: {$alumno->getEmail()}
            </li>";
        }
        ?>
    </ul>

    <h1>Profesores:</h1>
    <ul>
        <?php
        require_once "./clases/Profesor.php";
        $profesores = Profesor::crearProfesoresDeMuestra();

        foreach ($profesores as $profesor) {
            echo "<li> 
               
                Nombre: {$profesor->getName()} {$profesor->getApellidos()},   
                 Email: {$profesor->getEmail()}
            </li>";
        }
        ?>
    </ul>
    
    <h1>Asignaturas:</h1>
    <ul>
        <?php
        require_once "./clases/Asignatura.php";
        $asignaturas = Asignatura::crearAsignaturaDeMuestra();

        foreach ($asignaturas as $asignatura) {
            echo "<li> 
               
                Nombre: {$asignatura->getName()},   
                 Créditos: {$asignatura->getCreditos()}
            </li>";
        }
        ?>
    </ul>

    <h1>Alumnos <= 23:</h1>
    <ul>
        <?php
        $alumnos_filter = array_filter($alumnos, function ($alumno) {
            return $alumno->getEdad() <=23;
        });
        foreach ($alumnos_filter as $alumno) {
         
            echo "<li> 
               
                 
                Nombre: {$alumno->getName()} {$alumno->getApellidos()},
                 Email: {$alumno->getEmail()}
            </li>";
            
        }
        ?>
    </ul>
    <h1>Alumnos con al menos dos asignaturas:</h1>
    <ul>
        <?php
       $alumnos_filter = array_filter($alumnos,function($alumno){
        return count($alumno->getAsignaturas()) >= 2;
       });
        foreach ($alumnos_filter as $alumno) {
            
           
            echo "<li> 
               
                 
                Nombre: {$alumno->getName()} {$alumno->getApellidos()},
                 Email: {$alumno->getEmail()}
            </li>";
            
        }
        ?>
    </ul>
    <h1>Asignaturas con al menos algún alumno:</h1>
    <ul>
    <?php
    $asignaturasMatriculadas = [];  

    foreach ($alumnos as $alumno) {
      
        $asignaturasAlumno = $alumno->getAsignaturas(); 

        foreach ($asignaturasAlumno as $asignaturaAlumno) {
         
            foreach ($asignaturas as $asignatura) {
                
                if ($asignatura->getName() == $asignaturaAlumno) {
                    
                    if (!in_array($asignatura, $asignaturasMatriculadas)) {
                     
                        $asignaturasMatriculadas[] = $asignatura;

                        
                        echo "<li>Nombre: {$asignatura->getName()}, 
                        Creditos : {$asignatura->getCreditos()}</li>";
                    }
                }
            }
        }
    }
    ?>
</ul>



</body>

</html>