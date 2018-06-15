<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Association Registration - Ministry of Youth Development | Rivers State of Nigeria</title>
        <?php include_once('inc/metalinks.php'); ?>
    </head>
    <body>
        <?php include_once('inc/header.php'); ?>
        <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
            <div class="container">
                <div class="row">
                    <!-- contact form -->
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Association Registration</h5>
                              <?php
                            if (isset($_POST['send-club'])) {
                                include_once "scripts/club.php";
                            }
                            ?>
                            <form  method="POST" enctype="multipart/form-data" id="form1">
                                <div class="form-group">
                                    <label for="org_name">Name of Organization</label>
                                    <input type="text" class="form-control" name="org_name" required="" id="org_name" placeholder="Name of Organizaion">
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Type of Organization</label>
                                            <p><i>(Tick where necessary)</i><p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" checked="" name="org_type" id="org_type1" value="Youth">
                                            <label class="form-check-label" for="org_type1"> Youth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="org_type" id="org_type2" value="Social">
                                            <label class="form-check-label" for="org_type2"> Social</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="org_type" id="org_type3" value="NGO">
                                            <label class="form-check-label" for="org_type3"> NGO</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" id="org_type4" name="org_type" value="Development">
                                            <label class="form-check-label" for="org_type4">Development</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" id="org_type5" name="org_type" value="Welfare">
                                            <label class="form-check-label" for="org_type5">Welfare</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="town">Town/Community</label>
                                            <input type="text" class="form-control" name="town" required="" id="town" placeholder="Name of your town / community">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="guardian_phone">LGA</label>
                                            <select type="text" class="form-control" required="" name="lga" id="lga" placeholder="Your Local Govt Area">

                                                <option disabled=""></option>
                                                <option>Abua–Odual</option>
                                                <option>Ahoada East</option>
                                                <option>Ahoada West</option>
                                                <option>Akuku-Toru</option>
                                                <option>Andoni</option>
                                                <option>Asari-Toru</option>
                                                <option>Bonny</option>
                                                <option>Degema</option>
                                                <option>Eleme</option>
                                                <option>Emohua</option>
                                                <option>Etche</option>
                                                <option>Gokana</option>
                                                <option>Ikwerre</option>
                                                <option>Khana</option>
                                                <option>Obio-Akpor</option>
                                                <option>Ogba–Egbema–Ndoni</option>
                                                <option>Ogu–Bolo</option>
                                                <option>Okrika</option>
                                                <option>Omuma</option>
                                                <option>Opobo–Nkoro</option>
                                                <option>Oyigbo</option>
                                                <option>Port Harcourt</option>
                                                <option>Tai</option>
                                               
                                             </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Numerical Strenght</label>
                                            <p><i>(How many people work in your organization?)</i><p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="male_count">Male</label>
                                            <input type="text" class="form-control" required="" name="male_count" id="male_count" placeholder="Number of male staff">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="female_count">Female</label>
                                            <input type="text" class="form-control" required="" name="female_count" id="female_count" placeholder="Number of female staff">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="total_staff_count">Total</label>
                                            <input type="text" class="form-control" required="" name="total_staff_count" id="total_staff_count" placeholder="Male + Female">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="any_other_branch">Has the organization branches in other parts of the state?</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" checked="" name="org_branches" id="org_branches" value="Yes">
                                            <label class="form-check-label" for="any_other_branch"> Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="org_branches" id="org_type2" value="No">
                                            <label class="form-check-label" for="any_other_branch"> No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="other_branches">If yes, where?</label>
                                    <input type="text" class="form-control" name="other_branches" required="" id="other_branches" placeholder="Name other branches (separate with commas)">
                                </div>

                                <div class="form-group">
                                    <label for="org_obj">Organization Email</label>
                                    <input type="text" class="form-control" name="email" id="email" required="" placeholder="Email Address">
                                </div>

                                <div class="form-group">
                                    <label for="org_obj">Aims and Objectives of the Organization</label>
                                    <input type="text" class="form-control" name="org_obj" id="org_obj" required="" placeholder="Aims and Objectives">
                                </div>

                                <div class="form-group">
                                    <label for="guardian_address">Is it a religious body?</label>
                                    <input type="text" class="form-control" name="religous" id="religious" required="" placeholder="Is it a religious body?">
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Meeting Days / Nights</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="meeting_day">Day(s) of the week/month</label>
                                            <input type="text" class="form-control" name="meeting_day" required="" id="meeting_day" placeholder="When do you meet?">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="meeting_venue">Place</label>
                                            <input type="text" class="form-control" name="meeting_venue" required="" id="meeting_venue" placeholder="Where do you meet?">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="meeting_time">Time</label>
                                            <input type="text" class="form-control" name="meeting_time" required="" id="meeting_time" placeholder="What's your meeting time?">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="meeting_duration">Duration</label>
                                            <input type="text" class="form-control" name="meeting_duration" required="" id="meeting_duration" placeholder="How long (in hours)?">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="sec_address">Resident or specific address of Secretary (P.M.B not accepted)</label>
                                    <input type="text" class="form-control" name="sec_address" required="" id="sec_address" placeholder="Address of Secretary">
                                </div>

                                <div class="form-group">
                                    <label for="sec_phone">Contact Phone No.</label>
                                    <input type="number" class="form-control" name="sec_phone" required="" id="sec_phone" placeholder="Contact phone number of Sec">
                                </div>

                                <div class="form-group">
                                    <label for="sec_phone">Activities</label>
                                    <input type="text" class="form-control" name="activities" required="" id="activities" placeholder="Association activities">
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Patron Information (if any)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="patron_name">Name of Patron</label>
                                            <input type="text" class="form-control" name="patron_name" id="patron_name" placeholder="Name of Patron">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="patron_address">Address of Patron</label>
                                            <input type="text" class="form-control" name="patron_address" id="patron_address" placeholder="Address of Patron">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="patron_phone">Patron's Phone No.</label>
                                            <input type="text" class="form-control" name="patron_phone" id="patron_phone" placeholder="Patron's phone number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row"></br>
                                    <h4>DECLARATION</h4></br>
                                    <p>We the undersigned acting on behalf of the (1) President/Chairman, (2) Secretary, and (3) Treasurer.</p> </br>
                                    <p><i>A copy of your constitution and a list of members of your organization must be sent with this form. This list should show Name, Sex, Local Government and State of Origin.</i></p> </br>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="constitution">Copy of organization's constitution</label>
                                            <input type="file" class="form-control-file" name="coc" id="constitution" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="constitution">List of members of organization</label>
                                            <input type="file" class="form-control-file" name="lmo" id="constitution" required="">
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row"></br>
                                    <div class="form-group">
                                        <label class="form-check-label" for="org_type3"> By clicking on “Submit Application”, you are accept that the information you've provided are true.</label>
                                    </div>
                                </div>
                                    
                                <button class=" btn-medium btn-circle btn bg-greenish-blue text-white tz-text submit" name="send-club" type="submit">SUBMIT</button>

                            </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <?php include_once('inc/footer.php'); ?>
        <?php include_once('inc/script.php'); ?>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <?php include_once ('./scripts/formPay.php'); ?>
    </body>
</html>