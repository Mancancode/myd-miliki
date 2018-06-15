<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Data Form - Ministry of Youth Development | Rivers State of Nigeria</title>
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
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Data Form For Rivers State Youth</h5>
                                <?php
                            if (isset($_POST['submit'])) {
                                include_once "scripts/data.php";
                            }
                            ?>
                            <form role="form"  method="POST">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="first_name">Surname</label>
                                            <input type="text" class="form-control" name="surname" id="surname" placeholder="Surname">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="Middle_name">Middlename</label>
                                            <input type="text" class="form-control" name="Middle_names" id="Middle_names" placeholder="Middle Names">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="last_name">Lastname</label>
                                            <input type="text" class="form-control" name="other_names" id="other_names" placeholder="Last Names">
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="sex">Sex</label>
                                            <select type="text" class="form-control" name="sex" id="sex" placeholder="Sex">
                                                <option disabled=""></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Transgender</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="Date" oninput="getAge(this.value)" class="form-control" name="dob" id="dob" placeholder="Day/Month/Year">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input type="Number" class="form-control" name="age" id="age" placeholder="How old are you?">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="home_town">Home Town</label>
                                            <input type="text" class="form-control" name="home_town" id="home_town" placeholder="What's the name of your village?">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="lga">LGA</label>
                                            <select type="text" class="form-control" name="lga" id="lga" placeholder="What is your Local Govt of Origin?">
                                                
                                                <option disabled=""></option>
                                                <option>Abua-Odual</option>
                                                <option>Ahoada East</option>
                                                <option>Ahoada West</option>
                                                <option>Akuku-Toru</option>
                                                <option>Andoni</option>
                                                <option>Asari-Toru</option>
                                                <option>Bonny, Rivers</option>
                                                <option>Degema, Rivers</option>
                                                <option>Eleme, Rivers</option>
                                                <option>Emohua</option>
                                                <option>Etche</option>
                                                <option>Gokana, Rivers</option>
                                                <option>Ikwerre, Rivers</option>
                                                <option>Khana, Rivers</option>
                                                <option>Obio-Akpor</option>
                                                <option>Ogba-Egbema–Ndoni</option>
                                                <option>Ogu-Bolo</option>
                                                <option>Okrika</option>
                                                <option>Omuma</option>
                                                <option>Opobo-Nkoro</option>
                                                <option>Oyigbo</option>
                                                <option>Port Harcourt</option>
                                                <option>Tai</option>


                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="contact_address">Contact Address</label>
                                    <input type="text" class="form-control" name="contact_address" id="contact_address" placeholder="Address of where do you live?">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                                </div>

                                <div class="form-group">
                                    <label for="guardian_name">Name of Guardian</label>
                                    <input type="text" class="form-control" name="guardian_name" id="guardian_name" placeholder="Name of Guardian">
                                </div>

                                <div class="form-group">
                                    <label for="guardian_address">Address of Guardian</label>
                                    <input type="text" class="form-control" name="guardian_address" id="guardian_address" placeholder="Address of Guardian">
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="guardian_rel">Relationship</label>
                                            <input type="text" class="form-control" name="guardian_rel" id="guardian_rel" placeholder="How are you related?">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="guardian_phone">Guardian Phone</label>
                                            <input type="text" class="form-control" name="guardian_phone" id="guardian_phone" placeholder="Guardian Phone Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row"></br>
                                    <h4>Academic Qualification</h4>
                                    <p><i>(Enter your last two (2) qualifications)</i></p> </br>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="school">1. School Attended</label>
                                            <input type="text" class="form-control" name="school" id="school" placeholder="Name of school">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="qualification">Certificate/Degree Obtained</label>
                                            <select type="text" class="form-control" name="qualification" id="qualification" placeholder="Select One">
                                                <option disabled=""> Select One</option>
                                                <option>First School Leaving</option>
                                                <option>WASSCE</option>
                                                <option>NECO</option>
                                                <option>Degree Certificate</option>
                                                <option>ND</option>
                                                <option>HND</option>
                                                <option>Masters</option>
                                                <option>PhD</option>
                                                <option>Others</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="course">Discipline</label>
                                            <input type="text" class="form-control" name="course" id="course" placeholder="Course of Study">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="graduation_year">Year of Graduation</label>
                                            <input type="text" class="form-control" name="graduation_year" id="graduation_year" placeholder="Select One">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="school">2. School Attended</label>
                                            <input type="text" class="form-control" name="school1" id="school1" placeholder="Name of school">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="qualification">Certificate/Degree Obtained</label>
                                            <input type="text" class="form-control" name="qualification1" id="qualification1" placeholder="Select One">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="course">Discipline</label>
                                            <input type="text" class="form-control" name="course1" id="course1" placeholder="Course of Study">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="graduation_year">Year of Graduation</label>
                                            <input type="text" class="form-control" name="graduation_year1" id="graduation_year1" placeholder="Select One">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="other_qualifications">Other qualifications/Training (specify)</label>
                                    <input type="text" class="form-control" name="other_qualifications" id="other_qualifications" placeholder="Any other qualification or training obtained?">
                                </div>

                                <div class="form-group">
                                    <label for="text">Skills acquired</label>
                                    <input type="text" class="form-control" name="skills_acquired" id="skills_acquired" placeholder="Skills acquired">
                                </div>

                                <div class="form-group">
                                    <label for="skills_acquired">Skills intended to acquire</label>
                                    <input type="text" class="form-control" name="intended_skills" id="intended_skills" placeholder="What new skills do you want to learn?">
                                </div>
                                    
                                <input type="submit" class=" btn-medium btn-circle btn bg-greenish-blue text-white tz-text" name="submit" value="SUBMIT">  
                            
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
<script type="text/javascript">
   
function getAge(dateString) 
{

    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
      document.getElementById("age").value = age; 
    return age;

}
</script>