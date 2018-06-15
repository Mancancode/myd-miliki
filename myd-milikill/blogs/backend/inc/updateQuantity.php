<?php
include "../../conn/db.php";
session_start();
if (isset($_POST)) {
    $query = mysqli_query($con, "UPDATE mini_store SET quantity=".$_POST['first']." WHERE store_id = ".$_SESSION['id']." and post_id=" . $_POST['id'] . " ");
    if ($query) {
        echo "yes";
    } else {
        echo "no";
        //echo $_POST['first'].",".$_POST['second'].",".$_POST['third'].",".$_SESSION['id']."," . $_POST['id'];
    }
}