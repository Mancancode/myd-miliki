<?php
include('inc/db.php');

if(isset($_GET['post_id'])){
	$id=$_GET["post_id"];

    $delete_query = mysqli_query($con, "delete from news where id = '".$id."'");
    if($delete_query){
        echo '<script>alert("This post has been deleted!");</script>';
		$URL="index.php";
		echo "<script>location.href='$URL'</script>";
    }
}
?>