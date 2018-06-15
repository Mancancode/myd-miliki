<?php
    include_once 'dbc.php';
    include_once 'session.php';
?>
<style type="text/css">
     /* Dropdown Button */
.dropbtn {
    background-color: none;
    color: #000;
    padding: 16px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 300px;
    max-width: 100%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #0e8bad}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: none;
} 
</style>
<header class="header-style4" id="header-section9">
    <nav class="navbar bg-white white-header alt-font no-margin no-padding shrink-medium-header light-header">
        <div class="header-top bg-light-gray tz-header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="mail">
                            <b style="color:#07a6d6;">Quick Links:</b>
                            <span>&nbsp; &middot; &nbsp;</span>
                            <a href="mailto:riversyouthministry@gmail.com" class="text-light-gray tz-text">Email</a>
                            <span>&nbsp; &middot; &nbsp;</span>
                            <a href="login.php" class="text-light-gray tz-text">Portal</a>
                        </div>
                        <div class="social float-right">
                            <a href="#"><i class="fa fa-facebook tz-icon-color"></i></a>
                            <a href="https://www.twitter.com/RsMinofYouthDev"><i class="fa fa-twitter tz-icon-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin tz-icon-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom bg-white tz-header-bg">
            <div class="container navigation-menu">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-9">
                        <a href="index.php" class="inner-link"><img alt="" src="images/logo.png" data-img-size="(W)200px X (H)49px"></a>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-3 position-inherit">
                        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pull-right">
                            <ul class="nav navbar-nav font-weight-600" >
                                
                                <li><a class="inner-link" href="about.php">ABOUT</a></li>
                                <li><a class="inner-link" href="history.php">HISTORY</a></li>
                                <li> <div class="dropdown">
                                      <a class="dropbtn" href="#">DEPARTMENTS</a>
                                      <div class="dropdown-content">
                                        <a href="Youthmob.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Networking & Social Mobilization</a>
                                        <a href="youthedu.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Youth Education</a>
                                        <!--<a href="#" style=" color: black;padding: 12px 16px;text-decoration: none;" >HIV/AIDS Counseling and Testing programme (HCT)</a>-->
                                        
                                        <a href="youthdep.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Youth Enterprise Development & Promotion Department</a>
                                      </div>
                                    </div> 
                                </li>
                                <li><a class="inner-link" href="media.php">MEDIA</a></li>
                                <li> <div class="dropdown">
                                      <a class="dropbtn" href="#">PROGRAMMES</a>
                                      <div class="dropdown-content">
                                        <a href="agriculture.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Agriculture</a>
                                        <a href="youthacti.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Youth Activities</a>
                                        <a href="hiv.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >HIV/AIDS Counseling and Testing programme (HCT)</a>
                                        <a href="youthenterprise.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Innovative/Entrepreneurial Development</a>
                                      </div>
                                    </div> 
                                </li>
                                 <?php
                                    if (isset($_SESSION['email'])) {
                                       echo '<li><a class="inner-link" href="logout.php">LOGOUT</a></li>';
                                    }else{
                                       echo '<li>
                                            <div class="dropdown">
                                              <a class="dropbtn" href="#">REGISTRATION</a>
                                              <div class="dropdown-content">

                                              <a href="club-org-reg.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Association Registration Form</a>
                                                <a href="data-form.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Rivers Youth Registration Form</a>
                                                
                                                <a href="skill-edu-form.php" style=" color: black;padding: 12px 16px;text-decoration: none;" >Skill Acquisition Form</a>
                                                
                                              </div>
                                            </div> 
                                            </li>';
                                       echo '<li><a class="inner-link" href="login.php">LOGIN</a></li>'; 
                                       echo '<li><a class="inner-link" href="contact.php">CONTACT</a></li>';
                                    }
                                ?>
                              
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav> 
</header>  