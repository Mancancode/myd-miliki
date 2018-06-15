<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Club/NGO Registration - Ministry of Youth Development | Rivers State of Nigeria</title>
        <?php include_once('inc/metalinks.php'); ?>
    </head>
    <body>
        <?php include_once 'inc/header.php'; ?>
        <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                    <?php
                    include "blogs/backend/inc/db.php";
                    ?>
                    <div class="blog-top">
                        <?php
                        $get = base64_decode($_GET['read']);
                        $select = mysqli_query($con, "SELECT * FROM news where id='$get'");
                        while ($selectS = mysqli_fetch_array($select)) {
                            $title = $selectS['titles'];
                            $details = $selectS['details'];
                            $photo = $selectS['photo'];
                            $poster = $selectS['poster'];
                            $cat = $selectS['cat'];
                        }
                        ?>
                        <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom"><?php echo $title; ?></h5>
                            <div class="text-medium tz-text">
                                <p>
                                    Posted by <?php echo $poster; ?> in <?php echo $cat; ?></p>
                                </p>
                            </div>
                            <img src="blogs/<?php echo $photo; ?>" style="height:250px; margin:20px;"> <br>
                            <div class="text-medium tz-text">
                                <p>
                                    <?php echo nl2br($details); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <?php include_once('inc/footer.php'); ?>
        <?php include_once('inc/script.php'); ?>
    </body>
</html>