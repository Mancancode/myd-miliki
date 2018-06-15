<?php
include('inc/db.php');

error_reporting(E_ALL);
error_reporting(E_ERROR);
if(isset($_POST['upload'])) {
//loop through each uploads

    foreach ($_FILES['file']['tmp_name'] as $key => $name_temp) {
        $name = $_FILES['file']['name'][$key];
        $tmpnm = $_FILES['file']['tmp_name'][$key];
        $type = $_FILES['file']['type'][$key];
        $size = $_FILES['file']['size'][$key];

        if ($_FILES['file']['size'][$key] > 400000000000) {
            echo "file size should not exceed 1mb";
        } else {
            // check file extension
            if ($_FILES['file']['type'][$key] != 'image/jpeg'
                && $_FILES['file']['type'][$key] != 'image/jpg'
                && $_FILES['file']['type'][$key] != 'image/gif'
                && $_FILES['file']['type'][$key] != 'image/png'
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
    }

    @$news_title = mysqli_real_escape_string($con, $_POST['news_title']);
    @$category = mysqli_real_escape_string($con, $_POST['category']);
    @$details = mysqli_real_escape_string($con, $_POST['details']);
    @$poster = mysqli_real_escape_string($con, $_POST['poster']);
//    @$details = mysqli_real_escape_string($con, $_POST['details']);

    @$pushed = $_POST['upload'];

    $brand_name_f = strtolower($brand_name);
    $details_f = strtolower($details);
    $item_name_f = strtolower($item_name);


    if ($pushed) {
        $news = mysqli_query($con, "insert into news (titles,cat,details,photo,poster)VALUES ('$news_title','$category','$details','$pathnn','$poster')");
        if ($news) {
            echo '<script>alert("Successfully Uploaded!");</script>';
        }

    }
}

