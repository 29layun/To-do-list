<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
    $id = $_GET['ID'];
    require_once($_SERVER['DOCUMENT_ROOT']."/To-do-list/Backend/include/config.php");
    $sql = "SELECT * FROM `tareas` WHERE Estado ='Pendiente' AND id = $id";
    $Rdata = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($Rdata);
?>
<body>
<form action="../Controllers/update.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-whiter mt-3 py-3 col-md-6">
                <h1 class="text-center text-primary font-monospace">Update</h1>
                <div class="col-8">
                    <input type="text" value="<?php echo $data['Tarea'];?>" name="Tarea" class="form-control">

                </div>
                <div class="col 2">
                    
                    <button class="btn btn-outline-primary"><i class="fa-regular fa-share-from-square"></i></button>
                    <input type="hidden" name = "id" value="<?php echo $data['id'] ?>">
                  
                </div>
                
            </div>
        </div>   
    </form> 
    <form action="../Controllers/update2.php" method="POST">
         <div class="container">
            <div class="row justify-content-center m-auto shadow bg-whiter mt-3 py-3 col-md-6">
                <button style="width: 30%" class="btn btn-outline-primary">Finalizar ✔</button>
                <input type="hidden" name = "id" value="<?php echo $data['id'] ?>">
            </div>
        </div>
     </form>
     <script src="https://kit.fontawesome.com/66327de609.js" crossorigin="anonymous"></script>
</body>
</html>