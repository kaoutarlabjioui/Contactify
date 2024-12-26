<?php
include './connection/db.php';
$con=new connection();
// var_dump(
    $con->connect();
// );
include './navbar.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>Contactify</title>
</head>
<body class="d-flex flex-column gap-3 mt-2" >


<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Numero de Telephone</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
         
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                        <td>
                            <a href="" class="btn btn-warning me-2">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i> Supprimer
                            </a>
                        </td>
                    </tr>
         
        </tbody>
    </table>
</div>

<div class="container mt-5">
        <form name="player" id="addPlayr" method="post" action="./ajout.php">
            <div class="bg-light p-4 rounded shadow-sm">
                <h2 class="mb-4">Add Contact</h2>

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter votre name" required />
                    <!-- <div id="nameErr" class="text-danger"></div> -->
                </div>

                <!-- Photo -->
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Enter votre prenom " required />
                    <!-- <div id="photoErr" class="text-danger"></div> -->
                </div>

                     <!-- Rating -->
                <div class="mb-3">
                    <label for="rating" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required />
                    <!-- <div id="ratingErr" class="text-danger"></div> -->
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile" required />
                    <!-- <div id="ratingErr" class="text-danger"></div> -->
                </div>
                </div>
            </div>
             <input type="submit" class="btn btn-primary m-3 d-flex justify-center" name="submit">
        </form>
    </div>

</body>
</html>
<?php
include './footer.php';
 ?>