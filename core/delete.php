<?php 


include '../connection/db.php';
include '../connection/contact.php';
// var_dump($con->conne);
$contact1=new contact($con);
if (isset($_GET['id']))
{
$cont=$contact1->delete($_GET['id']);
    
if ($cont) {
        header('location:../index.php');
    }
}
?>

