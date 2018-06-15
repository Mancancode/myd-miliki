<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Contact - Ministry of Youth Development | Rivers State of Nigeria</title>
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
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Talk to us</h5>
                            <form action="javascript:void(0)" method="post">
                                <input type="text" name="name" data-email="required" id="name" placeholder="* Your Name" class="medium-input border-radius-8">                                    
                                <input type="text" name="email" data-email="required" id="email" placeholder="* Your Email" class="medium-input border-radius-8">                                    
                                <textarea name="comment" id="comment" placeholder="Your Message" class="medium-input border-radius-8"></textarea>                                    
                                <button class="default-submit btn-medium btn-circle btn bg-greenish-blue text-white tz-text" type="submit" onclick="smail()" id="sendmail">SEND MESSAGE</button>                                    
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

