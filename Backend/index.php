<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="Controllers/insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-whiter mt-3 py-3 col-md-6">
                <h1 class="text-center text-primary font-monospace">To-do list using </h1>
                <div class="col-8">
                    <input type="text" name="Tarea" class="form-control">
                </div>
                <div class="col 2">
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></button>
                </div>
                
            </div>
        </div>   
    </form> 

    <!-- Tabla de lista de tareas -->

    <?php
    require_once($_SERVER['DOCUMENT_ROOT']."/To-do-list/Backend/include/config.php");
    $sql = "SELECT * FROM `tareas`";
    $rawdata = mysqli_query($con, $sql);
    
    ?>

    <div class="container">
        <div class="col-md-6 bg-white mt-3 m-auto py-3 ">
            <table>
                <tbody>
                <tr>
                    <td class="text-tertiary">#</td>
                    <td class="text-tertiary">Tarea</td>
                    <td class="text-tertiary">Estado</td>
                    <td class="text-tertiary">Accion</td>
                    <td></td>
                    
                </tr>
                    <?php
                    while($row = mysqli_fetch_array($rawdata)){
                    ?>
                <tr>
                    <td class="text-secondary"><?php echo $row['id'] ?></td>
                    <td class="text-secondary"><?php echo $row['Tarea'] ?></td>
                    <td class="text-secondary"><?php echo $row['Estado'] ?></td>
                    <?php
                    if($row['Estado']=='Finalizada'){
                    ?>
                        <td></td>
                        <td style="width: 10%"><a href="Controllers/delete.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                    <?php
                    } else{
                    ?>
                    <td style="width: 10%"><a href="Views/FormUpdate.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td style="width: 10%"><a href="Controllers/delete.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                    <?php    
                    }
                    ?>
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/66327de609.js" crossorigin="anonymous"></script>
</body>
</html>