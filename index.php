<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CRUD test</title>
</head>
<body>
    <nav class=" navbar navbar-light justify-content-center fs-3 mb-5 " style="background-color : #19359F; color: #fff ">
        CRUD php-Bootstrap
    </nav>

    <div class="container">
        <?php
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        ?>
        <a href="add_new.php" class="btn btn-dark float-end mb-3 ">Add New User</a>

        <table class="table table-striped table-bordered table-hover rounded-circle text-center">
            <thead style="background-color: #19359F; color: #fff; ">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody> 

                <?php
                include "db_connect.php";
                    $sql = "SELECT * FROM `crud`" ;
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <th><?php echo $row['Id'] ?></th>
                                <th><?php echo $row['First_name'] ?></th>
                                <th><?php echo $row['Last_name'] ?></th>
                                <th><?php echo $row['Email'] ?></th>
                                <th><?php echo $row['Gender'] ?></th>
                               
                                <td>
                                    <a href="edit.php?id=<?php echo $row['Id']  ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                    <a href="delete.php?id=<?php echo $row['Id']  ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
                                </td>
                            </tr>    
                        <?php
                    }
                ?>

                
               
                
            </tbody>
        </table>

    </div>

</body>
</html>