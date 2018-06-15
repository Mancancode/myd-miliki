
<?php
include_once "inc/session.php";
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Login - Ministry of Youth Development | Rivers State of Nigeria</title>
        <?php include_once('inc/metalinks.php'); ?>
    </head>
    <body>
        <?php include_once('inc/header.php'); ?>
        <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <!-- contact form -->
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                        <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Login Portal</h5>
                            <?php
                            if (isset($_GET['ok'])==1) {
                                echo "<div><span class='text-success' style='margin-bottom:20px;'>Registered successfully check your email for password!</span></div>";
                            }
                            ?>
                            <?php
                            if (isset($_POST['lgn'])) {
                                $email=mysqli_real_escape_string($con, trim($_POST['email']));
                                $password=mysqli_real_escape_string($con, trim($_POST['password']));

                                $query1=mysqli_num_rows(mysqli_query($con, "SELECT * FROM club_org_reg WHERE email='$email' AND password='$password' "));

                                if ($query1 > 0) {

                                     print('<script>window.location.assign("dashboard.php")</script>');
                                     $_SESSION['email']=$email;

                                }elseif ($query1 < 1) {
                                 $query2=mysqli_num_rows(mysqli_query($con, "SELECT * FROM rivers_youth_registration WHERE email='$email' AND password='$password' "));

                                 if ($query2 > 0) {

                                      print('<script>window.location.assign("dashboard.php")</script>');
                                      $_SESSION['email']=$email;

                                 }
                                 elseif ($query2 < 1) {
                                $query3=mysqli_num_rows(mysqli_query($con, "SELECT * FROM skill_edu_form WHERE email='$email' AND password='$password' ")); 

                                    if ($query3 > 0) {

                                        print('<script>window.location.assign("dashboard.php")</script>');
                                         $_SESSION['email']=$email; 

                                    }elseif($query3 < 1){
                                     $query4=mysqli_num_rows(mysqli_query($con, "SELECT * FROM admin WHERE email='$email' AND password='$password' "));
                                        
                                    if($query4 > 0) {
                                          print('<script>window.location.assign("dashboard.php")</script>');
                                         $_SESSION['email']=$email; 
                                     }else{
                                     echo "<span style='margin-top: 30px; color: red;'>Invalid Login</span>";
                                          }
                                    }
                                 }
                              }
                          }
                        ?>
                            <form  method="post">
                                <input type="email" name="email" data-email="required" required="" id="name" placeholder="* Your Email" class="medium-input border-radius-8">                                    
                                <input type="password" name="password" data-email="required" required=""  id="email" placeholder="* Your Password" class="medium-input border-radius-8">                                                        
                                <button class=" btn-medium btn-circle btn bg-greenish-blue text-white tz-text" name="lgn" type="submit">LOGIN</button>                                    
                            </form>
                           
                      </div>
                    </div>
                </div>
            </div>
        </section> 
        <?php include_once('inc/footer.php'); ?>
        <?php include_once('inc/script.php'); ?>
    </body>
</html>
