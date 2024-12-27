<?php
include '../connection/db.php';
include '../connection/contact.php';
// var_dump($con->conne);
$contact1=new contact($con);
$id = $_GET['id'];

if (isset($_POST['submit']))
{
$cont=$contact1->update($id,$_POST['name'],$_POST['prenom'],$_POST['email'],$_POST['mobile'],);
    
if ($cont) {
        header('location:../index.php');
    }
}
?>

