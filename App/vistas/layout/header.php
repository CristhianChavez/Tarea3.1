<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body{
            background-color: #c0dae8;
            font-family: "Book Antiqua";
        }

        h1{
            font-size: 25px;
        }
        h2{
            font-size: 20px;
        }
    
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar narvar-light" style="background-color : #e3f2fd;">
                    <div class="container-fluid">
                        Empresa
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                    echo "<li><a href='index.php?bienvenido'>Inicio</a></li>";
                    switch ($_SESSION["tipo"]){
                        case "profesor":
                            echo "profesor 
                                    <li><a href='#'>Ver Cursos a Cargo</a></li>";
                                    break;
                        case "estudiante":
                            echo "Estudiante 
                                    <li><a href='#'>Ver Notas</a></li>
                                    <li><a href='#'>Matricula</a></li>";
                                    break;
                        case "administrador":
                            echo "Administrador
                                    <li><a href='index.php?crear-usuarios'>Crear Usuarios</a></li>
                                    <li><a href='index.php?crear-plan-de-estudios'>Crear Plan de Estudios</a></li>
                                    <li><a href='index.php?asignar-cursos'>Asignar Cursos</a></li>";
                                    break;
                    }
                    echo "<li><a href='logout.php'>Salir</a></li>";
                
                ?>
            </div>
            <div class="col-9">
