<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Skills Education Application - Ministry of Youth Development | Rivers State of Nigeria</title>
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
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Skills Education Application</h5>
                                <?php
                            if (isset($_POST['send'])) {
                                include_once "scripts/skills.php";
                            }
                            ?>
                            <form  method="POST">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="first_name">Surname</label>
                                            <input type="text" class="form-control" required="" name="surname" id="surname" placeholder="Surname">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="mid_name">Middle Names</label>
                                            <input type="text" class="form-control" required="" name="mid_name" id="mid_name" placeholder="Middle Names">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="last_name">Last Names</label>
                                            <input type="text" class="form-control" required="" name="last_name" id="last_name" placeholder="Last Names">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="nationality">Nationality</label>
                                            <input type="text" class="form-control" required="" name="nationality" id="nationality" placeholder="Nationality">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="state">State of Origin</label>
                                            <input type="text" class="form-control" required="" name="state" id="state" placeholder="State of Origin">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="lga">LGA</label>
                                            <div class="form-control" required="" name="lga" id="lga" placeholder="Local Govt Area"> 

                                                   
                                                   <!-- <option disabled=""></option>
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
                                                <option>Tai</option> -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" required="" name="phone" id="v" placeholder="State of Origin">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="sex">Sex</label>
                                            <select class="form-control" name="sex" id="sex" required="">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Transgender</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="marital_status">Marital Status</label>
                                            <select class="form-control" name="marital_status" id="marital_status" required="">
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Widow / Widower</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="Date" class="form-control" oninput="getAge1(this.value)" name="dob" id="dob" required="" placeholder="Day/Month/Year">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="dob">Age</label>
                                            <input type="number" class="form-control" name="age" id="age" required="" placeholder="How old are you?">
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="pob">Place of Birth</label>
                                            <input type="text" class="form-control" name="pob" required="" id="pob" placeholder="Where were you born?">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" class="form-control" name="occupation" required="" id="occupation" placeholder="What do you do for a living?">
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="any_other_branch">Mode of Identificaitoin</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="id_type" id="id_type1" value="National ID" >
                                            <label class="form-check-label" for="id_type1"> National ID</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="id_type" id="id_type2" value="Int'l Passport">
                                            <label class="form-check-label" for="id_type2"> Int'l Passport</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="id_type" id="id_type3" value="Voter's Card">
                                            <label class="form-check-label" for="id_type3"> Voter's Card</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="id_type" id="id_type4" value="Others">
                                            <label class="form-check-label" for="id_type4"> Others</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-check-label" for="id_type4"> If others, state below</label>
                                            <input type="text" class="form-control" name="id_type" id="id_type4" placeholder="Other ID">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <input type="text" class="form-control" name="religion" id="religion" placeholder="What is your religion?">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="tr_centre">Training Center</label>
                                            <input type="text" class="form-control" name="tr_centre" id="tr_centre" placeholder="Please specify">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mum_maiden">Mother's Maiden Name</label>
                                            <input type="text" class="form-control" name="mum_maiden" id="mum_maiden" placeholder="Your mother's maiden name?">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="city">City/Town</label>
                                            <input type="text" class="form-control" name="city" id="city" placeholder="Please specify">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address">Residential Address</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Where do you live?">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="someone@email.com">
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Programme period/time</label>
                                            <p><i>(Tick where necessary)</i><p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="period" id="period1" value="Morning" checked="">
                                            <label class="form-check-label" for="period1"> Morning</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="period" id="period2" value="Evening">
                                            <label class="form-check-label" for="period2"> Evening</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="period" id="period3" value="Saturday">
                                            <label class="form-check-label" for="period3"> Saturday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="period" id="period4" value="Special Learning">
                                            <label class="form-check-label" for="period4"> Special Learning</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="any_other_branch">Any formal skills?</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="any_formal_skills" id="any_formal_skills" value="Yes" checked="">
                                            <label class="form-check-label" for="any_formal_skills"> Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group text-center">
                                            <input class="form-check-input" type="radio" name="any_formal_skills" id="any_formal_skills" value="No">
                                            <label class="form-check-label" for="any_formal_skills"> No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row"></br>
                                    <h4>Course Available</h4></br>
                                    <div class="col-md-6 col-sm-6">
                                        <ul style="list-style: none;">
                                            <li>1. Shoe Making</li>
                                            <li>2. Cosmetology</li>
                                            <li>3. Bead / Hat Making</li>
                                            <li>4. Tile Work</li>
                                            <li>5. Cain Making</li>
                                            <li>6. Casava Flour / Plantain Flour</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul style="list-style: none;">
                                            <li>7. Ankara Craft Work</li>
                                            <li>8. Make-Up Art</li>
                                            <li>9. Fashion Design</li>
                                            <li>10. Catering</li>
                                            <li>11. Hair Dressing</li>
                                            <li>12. Video / Photography</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul style="list-style: none;">
                                            <li>13. Agro (Fishery, Feed Processing, Snail Farming & Tilapia Fish Farming)</li>
                                        </ul>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="email">Course Applied</label>
                                    <input type="text" class="form-control" name="courses" required="" id="courses" placeholder="Example: 1, 4, and 12 ">
                                </div>

                                <div class="row"></br>
                                    <div class="form-group">
                                        <label class="form-check-label" for="org_type3"> By clicking on “Submit Application”, you are accept that the information you've provided are true.</label>
                                    </div>
                                </div>
                                    
                                <button class=" btn-medium btn-circle btn bg-greenish-blue text-white tz-text" name="send" type="submit">SUBMIT</button>

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

   
function getAge1(dateString) 
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