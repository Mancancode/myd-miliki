<?php
include_once "inc/dbc.php";
$surname=mysqli_real_escape_string($con, trim($_POST['surname']));
$other_names=mysqli_real_escape_string($con, trim($_POST['other_names']));
$sex=mysqli_real_escape_string($con, trim($_POST['sex']));
$dob=mysqli_real_escape_string($con, trim($_POST['dob']));
$age=mysqli_real_escape_string($con, trim($_POST['age']));
$home_town=mysqli_real_escape_string($con, trim($_POST['home_town']));
$lga=mysqli_real_escape_string($con, trim($_POST['lga']));
$contact_address=mysqli_real_escape_string($con, trim($_POST['contact_address']));
$email=mysqli_real_escape_string($con, trim($_POST['email']));
$phone=mysqli_real_escape_string($con, trim($_POST['phone']));
$guardian_name=mysqli_real_escape_string($con, trim($_POST['guardian_name']));
$guardian_address=mysqli_real_escape_string($con, trim($_POST['guardian_address']));
$guardian_rel=mysqli_real_escape_string($con, trim($_POST['guardian_rel']));
$guardian_phone=mysqli_real_escape_string($con, trim($_POST['guardian_phone']));
$school=mysqli_real_escape_string($con, trim($_POST['school']));
$qualification=mysqli_real_escape_string($con, trim($_POST['qualification']));
$course=mysqli_real_escape_string($con, trim($_POST['course']));
$graduation_year=mysqli_real_escape_string($con, trim($_POST['graduation_year']));
$school1=mysqli_real_escape_string($con, trim($_POST['school1']));
$qualification1=mysqli_real_escape_string($con, trim($_POST['qualification1']));
$course1=mysqli_real_escape_string($con, trim($_POST['course1']));
$graduation_year1=mysqli_real_escape_string($con, trim($_POST['graduation_year1']));
$other_qualifications=mysqli_real_escape_string($con, trim($_POST['other_qualifications']));
$skills_acquired=mysqli_real_escape_string($con, trim($_POST['skills_acquired']));
$intended_skills=mysqli_real_escape_string($con, trim($_POST['intended_skills']));

  $checkmail=mysqli_num_rows(mysqli_query($con, "SELECT * FROM rivers_youth_registration WHERE email='$email' "));
if ($checkmail>0) {
  echo "<h4 style='color:red;'>Email Already Exist</h4>";
}

elseif ($surname !== "" && $mid_name !== "" && $last_name !== "" && $sex !== "" && $dob !== "" && $age !== "" && $home_town !== "" && $lga !== "" && $contact_address !== "" && $email !== "" && $phone !== "" && $guardian_name !== "" && $guardian_address !=="" && $guardian_rel !=="guardian_rel" && $guardian_phone !== "guardian_phone" && $school !== "" && $qualification !== "" && $graduation_year !== "" &&  $school1 !== "" && $qualification1 !== "" && $graduation_year1 !== "") {

  $random = substr(md5(mt_rand()), 0, 10);
  $date = date('Y-m-d');
  $query=mysqli_query($con, "INSERT INTO rivers_youth_registration (id,surname,other_names,sex,dob,age,home_town,lga,contact_address,email,password,phone,name_of_guardian,address_of_guardian,relationship_of_guardian,phone_of_guardian,school_attened,cv_obtained,decipline,year_of_graduation,school_attened2,cv_obtained2,discipline2,year_of_graduation2,other_qualifications,skills_acquired,skills_intend_to_acquire,date_created) VALUES ('','$surname','$other_names','$sex','$dob','$age','$home_town','$lga','$contact_address','$email','$random','$phone','$guardian_name','$guardian_address','$guardian_rel','$guardian_phone','$school','$qualification','$course','$graduation_year','$school1','$qualification1','$course1','$graduation_year1','$other_qualifications','$skills_acquired','$intended_skills','$date') ");

  if ($query == true) {
    $date = date("Y");
    $message= 'Your rigistration was successful see secret key below';
        $subject = "Login info";
        $htmlContent = '<html>
          <body style="background: #e4e2e2">
          <center><div style="width: 50%;border-radius: 5px 5px 5px 5px;height:60%">

          <div style="background: white;padding:10%;margin-top:25px">
           <div>
            <h6>'.$message.'</h6>
           </div>
          <h3 style="color: #1ab394;font-family: Open Sans, helvetica, arial, sans-serif;margin:3%">
            Login Password 
          </h3>
          <p style="padding:10px;line-height:200%"> <b> Your password: </b>  '.$random .'</p>
         <div >
            <div></div>
             </div>
           <br>
           <div>
            <p><strong>Copyright</strong> &copy;<i id="today_d">'.$date.'</i>riversyouthministry</p>
           </div>
       </div>
       </div>
     </center>
  </body>
  </html>';
  
        $from ='Login Detail<login@riversyouthministry.rv.gov.ng>';
  // Additional headers
  $headers = 'From: ' . $from. "\r\n";   
  $headers  .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 mail($email,$subject,$htmlContent,$headers);
  print('<script>window.location.assign("login.php?ok=1")</script>');

  }elseif ($query !== true) {
    echo "mysqli_query error ";
  }
}else {
  echo "<h4 style='color:blue;'>Unsuccessful Some empty inputs </h4>";
}

?>