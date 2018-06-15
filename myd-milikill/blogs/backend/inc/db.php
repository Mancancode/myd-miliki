<?php
$con = mysqli_connect("localhost","root","","riversmyd_blog");
// $con = mysqli_connect("localhost","yeloifkm_riversmyd_user","CunABqJ-maaK","yeloifkm_riversmyd_blog");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>