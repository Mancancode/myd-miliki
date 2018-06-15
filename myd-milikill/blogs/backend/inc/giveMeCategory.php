<?php
include("db.php");
if(isset($_POST)) {
    $selects = mysqli_query($con, "select *  from category WHERE category_name=".$_GET['cat']." ORDER by category");
    while ($ren = mysqli_fetch_array($selects)) {
        $cat = $ren['category'];
        echo '<option value="' . $cat . '">' . $cat . '</option>';
    }
}