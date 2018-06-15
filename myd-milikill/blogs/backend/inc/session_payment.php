<?php
session_start();
error_reporting(E_ERROR);

include('db.php');
 $user_log = $_SESSION['login_user'];
$user_id = $_SESSION['id'];
$usernm = $_SESSION['username'];
if (!isset($_SESSION['login_user'])) {
    header('Location:../app/login'); // Redirecting To Home Page
}

$user_details = mysqli_query($con, "select *  from registration  where email='$user_log'");
while ($users_details = mysqli_fetch_array($user_details)) {
    $user_id = $users_details['store_id'];
    //$plan = $users_details['plan'];
    $act = $users_details['act'];
    $email = $users_details['email'];
     $phone = $users_details['phone'];
     $address1 = $users_details['location'];
     $state = $users_details['state'];
     $store_name = $users_details['store_name'];
     $plans = $users_details['plan'];
}
