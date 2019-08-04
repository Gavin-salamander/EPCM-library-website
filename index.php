<?php
 if(!empty($_SESSION['sname'])){
   header('location:login.php');
 }
 else {
    ?>
<?php
include('header_top.php');
include('index_seo.php');
include('header.php');
include('navbar.php');
 ?>




<?php 
include 'contact.php';
?>

<?php
    include("footer.php");
?>
<?php } ?>
