<?php
include './connection/db.php';
// var_dump(
// $con->connect()
// );
include './navbar.php';
include './connection/contact.php';
$contact1=new contact($con);
$contacts=$contact1->display();
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

<body class="d-flex flex-column gap-3 mt-2">


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
            <?php 
           foreach($contacts as $contact){
            ?>
                <tr>
                    <td><?= $contact["nom"]?></td>
                    <td><?= $contact["prenom"]?></td>
                    <td><?= $contact["email"]?></td>
                    <td><?= $contact["telephone"]?></td>

                    <td>
                        <button class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$contact["id"]?>">
                            <i class="fas fa-edit"></i> Modifier
                        </button>
                        <a href="./core/delete.php?id=<?=$contact["id"] ?>"  class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Supprimer
                        </a>
                    </td>
                </tr>
            <?php
         }?>
            </tbody>
        </table>
    </div>

    <div class="container mt-5 w-50">
        <form name="player" id="addPlayr" method="post" action="./core/ajouter.php">
            <div class="bg-light p-4 rounded shadow-sm">
                <h2 class="mb-4">Add Contact</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter votre name" required />
                    <!-- <div id="nameErr" class="text-danger"></div> -->
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Enter votre prenom " required />
                    <!-- <div id="photoErr" class="text-danger"></div> -->
                </div>


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
            <input type="submit" class="btn btn-primary m-3 d-flex justify-center" name="submit">
        </form>
    </div>
    <?php 
           foreach($contacts as $contact){
            ?>
    <div class="modal fade" id="exampleModal<?=$contact["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name="player" id="addPlayr" method="post" action="./core/update.php?id=<?=$contact["id"]?>">
            <div class="bg-light p-4 rounded shadow-sm">
                <h2 class="mb-4">Add Contact</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="<?=$contact["nom"]?>" name="name" id="name" class="form-control" placeholder="Enter votre name" required />
                    <!-- <div id="nameErr" class="text-danger"></div> -->
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" value="<?=$contact["prenom"]?>" name="prenom" id="prenom" class="form-control" placeholder="Enter votre prenom " required />
                    <!-- <div id="photoErr" class="text-danger"></div> -->
                </div>


                <div class="mb-3">
                    <label for="rating" class="form-label">Email</label>
                    <input type="email" name="email" id="email" value="<?=$contact["email"]?>" class="form-control" placeholder="Enter your email" required />
                    <!-- <div id="ratingErr" class="text-danger"></div> -->
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="tel" name="mobile" id="mobile" value="<?=$contact["telephone"]?>" class="form-control" placeholder="Enter your mobile" required />
                    <!-- <div id="ratingErr" class="text-danger"></div> -->
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>
<?php }?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php
include './footer.php';
?>