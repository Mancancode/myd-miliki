<?php
//include('session/session.php');
include('inc/db.php');

error_reporting(E_ALL);
error_reporting(E_ERROR);
//loop through each uploads
if(isset($_FILES['file']) && $_FILES['file']['size'] > 0){
    // Check if images is added for the update
    // foreach ($_FILES['file']['tmp_name'] as $key => $name_temp) {
    $name = $_FILES['file']['name'];
    $tmpnm = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    $size = $_FILES['file']['size'];

    if ($_FILES['file']['size'] > 400000000000) {
        echo "file size should not exceed 1mb";
    } else {
        // check file extension
        if ($_FILES['file']['type'] != 'image/jpeg'
            && $_FILES['file']['type'] != 'image/jpg'
            && $_FILES['file']['type'] != 'image/gif'
            && $_FILES['file']['type'] != 'image/png'
        ) {
            // echo "Please upload only Image file";
        } else {
            //this is the dir for the photo
            $dir = "../image-upload/" . $name;
            $newname = str_shuffle('01234567891234567890') . '.jpg';
            $move = move_uploaded_file($tmpnm, "../image-upload/" . $newname);
            $pathnn = "./image-upload/" . $newname;
        }
    }
// }
@$post_id = mysqli_real_escape_string($con, $_POST['post_id']);
@$pushed = $_POST['update'];

if ($pushed) {
    $update_worked = mysqli_query($con, "update main_store set photo = '".$pathnn."' where post_id = '".$post_id."'");
    if ($update_worked) {
        // echo '<script>alert("Successfully Updated!");</script>';
    }

}
    
} else{

}

@$tag = mysqli_real_escape_string($con, $_POST['tag']);
@$brand_name = mysqli_real_escape_string($con, $_POST['brand_name']);
@$item_name = mysqli_real_escape_string($con, $_POST['item_name']);
@$details = mysqli_real_escape_string($con, $_POST['details']);
@$category = mysqli_real_escape_string($con, $_POST['category']);
@$quantity = mysqli_real_escape_string($con, $_POST['quantity']);
@$cost_price = mysqli_real_escape_string($con, $_POST['cost_price']);
@$selling_price = mysqli_real_escape_string($con, $_POST['selling_price']);
@$max_supply = mysqli_real_escape_string($con, $_POST['max_supply']);
@$track = mysqli_real_escape_string($con, $_POST['track']);
@$post_id = mysqli_real_escape_string($con, $_POST['post_id']);

@$pushed = $_POST['update'];

if ($pushed) {
    $update_query = mysqli_query($con, "update mini_store set category = '".$category."',quantity = '".$quantity."',cost_price = '".$cost_price."',max_supply = '".$max_supply."',cost_price = '".$cost_price."',selling_price = '".$selling_price."',track = '".$track."' where post_id = '".$post_id."'");
    if($update_query){
        $update2 = mysqli_query($con, "update main_store set tag = '".$tag."', brand_name = '".$brand_name."', item_name = '".$item_name."', details = '".$details."', category = '".$category."' where post_id = '".$post_id."'");
        if($update2){
            echo '<script>alert("Successfully Updated!");</script>';
            echo '<script>window.location = "add-product.php";</script>';
        }
    }
}


?>