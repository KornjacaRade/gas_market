<?php
include("includes/index_header.php");

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>

<?php

if(isset($_POST['submit'])){

    insert_data();

}

if(isset($_POST['clear'])){

    clear_fields();
}

?>

<?php include ("includes/insert_form.php");?>


<?php include ("includes/index_footer.php");?>
