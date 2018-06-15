<?php
include_once "inc/dbc.php";

$surname=mysqli_real_escape_string($con, trim($_POST['surname']));
$mid_name=mysqli_real_escape_string($con, trim($_POST['mid_name']));
$last_name=mysqli_real_escape_string($con, trim($_POST['last_name']));
$nationality=mysqli_real_escape_string($con, trim($_POST['nationality']));
$state=mysqli_real_escape_string($con, trim($_POST['state']));
$lga=mysqli_real_escape_string($con, trim($_POST['lga']));
$phone=mysqli_real_escape_string($con, trim($_POST['phone']));
$marital_status=mysqli_real_escape_string($con, trim($_POST['marital_status']));
$sex=mysqli_real_escape_string($con, trim($_POST['sex']));
$dob=mysqli_real_escape_string($con, trim($_POST['dob']));
$pob=mysqli_real_escape_string($con, trim($_POST['pob']));
$occupation=mysqli_real_escape_string($con, trim($_POST['occupation']));
$id_type=mysqli_real_escape_string($con, trim($_POST['id_type']));
$religion=mysqli_real_escape_string($con, trim($_POST['religion']));
$tr_centre=mysqli_real_escape_string($con, trim($_POST['tr_centre']));
$mum_maiden=mysqli_real_escape_string($con, trim($_POST['mum_maiden']));
$city=mysqli_real_escape_string($con, trim($_POST['city']));
$address=mysqli_real_escape_string($con, trim($_POST['address']));
$email=mysqli_real_escape_string($con, trim($_POST['email']));
$period=mysqli_real_escape_string($con, trim($_POST['period']));
$any_formal_skills=mysqli_real_escape_string($con, trim($_POST['any_formal_skills']));
$courses=mysqli_real_escape_string($con, trim($_POST['courses']));
$age=mysqli_real_escape_string($con, trim($_POST['age']));

  $checkmail=mysqli_num_rows(mysqli_query($con, "SELECT * FROM skill_edu_form WHERE email='$email' "));
if ($checkmail>0) {
  echo "<h4 style='color:red;'>Email Already Exist</h4>";
}

elseif ($surname !== "" && $mid_name !== "" && $last_name !== "" && $nationality !== "" && $state !== "" && $lga !== "" && $phone !== "" && $marital_status !== "" && $sex !== "" && $dob !=="" && $pob !== "" && $occupation !== "" && $id_type !== "" && $religion !== "" && $tr_centre !== "" && $mum_maiden !== "" && $city !== "" && $address !== "" && $email !== "" && $period !== "" && $any_formal_skills !== "" && $courses !== "" && $age !== "") {

  $random = substr(md5(mt_rand()), 0, 10);
  $date = date('Y-m-d');
  $query=mysqli_query($con, "INSERT INTO skill_edu_form (id,surname,middle_name,last_name,nationality,state_of_origin,lga,phone,sex,marital_status,dob,pob,occupation,mode_of_identification,religion,training_center,mother_mid_name,city,residential_address,email,password,programme_time,any_formal_skills,course_applied,date_created,age) VALUES ('','$surname','$mid_name','$last_name','$nationality','$state','$lga',
    '$phone','$sex','$marital_status','$dob','$pob','$occupation','$id_type','$religion','$tr_centre','$mum_maiden','$city','$address','$email','$random','$period','$any_formal_skills','$courses','$date','$age') ");

  if ($query ==true) {
 $date = date("Y");
       $subject = "Login Secret";
$message= 'Your rigistration was successful see secret key below';
        $htmlContent = '<html>
          <body style="background: #e4e2e2">
          <center><div style="width: 50%;border-radius: 5px 5px 5px 5px;height:60%">

          <div style="background: white;padding:10%;margin-top:25px">
           <div>
            <h6>'.$message.'</h6>
           </div>
          <h3  style="color: #1ab394;font-family: Open Sans, helvetica, arial, sans-serif;margin:3%"> Login Password</h3>
          <p style="padding:10px;line-height:200%"><b>Your Password:  </b> '.$random.'</p>
         <div >
            <div></div>
             </div>
           <br>
           <div>
            <p><strong>Copyright</strong> &copy; <i id="today_d">'.$date.'</i> Riversyouthministry</p>
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
  }else{
    echo "mysqli posting error..";
  }
}else{
  echo "<h4 style='color:blue;'>Unsuccessful Some empty inputs </h4>";
}


?>