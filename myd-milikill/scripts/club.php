<?php
include_once "../inc/dbc.php";

$org_name=mysqli_real_escape_string($con, trim($_POST['org_name']));
$org_type=mysqli_real_escape_string($con, trim($_POST['org_type']));
$town=mysqli_real_escape_string($con, trim($_POST['town']));
$lga=mysqli_real_escape_string($con, trim($_POST['lga']));
$male_count=mysqli_real_escape_string($con, trim($_POST['male_count']));
$female_count=mysqli_real_escape_string($con, trim($_POST['female_count']));
$total_staff_count=mysqli_real_escape_string($con, trim($_POST['total_staff_count']));
$org_branches=mysqli_real_escape_string($con, trim($_POST['org_branches']));
$other_branches=mysqli_real_escape_string($con, trim($_POST['other_branches']));
$email=mysqli_real_escape_string($con, trim($_POST['email']));
$org_obj=mysqli_real_escape_string($con, trim($_POST['org_obj']));
$religous=mysqli_real_escape_string($con, trim($_POST['religous']));
$meeting_day=mysqli_real_escape_string($con, trim($_POST['meeting_day']));
$meeting_venue=mysqli_real_escape_string($con, trim($_POST['meeting_venue']));
$meeting_time=mysqli_real_escape_string($con, trim($_POST['meeting_time']));
$meeting_duration=mysqli_real_escape_string($con, trim($_POST['meeting_duration']));
$sec_address=mysqli_real_escape_string($con, trim($_POST['sec_address']));
$sec_phone=mysqli_real_escape_string($con, trim($_POST['sec_phone']));
$patron_name=mysqli_real_escape_string($con, trim($_POST['patron_name']));
$patron_phone=mysqli_real_escape_string($con, trim($_POST['patron_phone']));
$activities=mysqli_real_escape_string($con, trim($_POST['activities']));
$patron_address=mysqli_real_escape_string($con, trim($_POST['patron_address']));
  $tmp_name = $_FILES["coc"]["tmp_name"];
    $name = $_FILES["coc"]["name"];
    $target="../upload/doc1/".$name;
    move_uploaded_file($tmp_name, $target); 

    $tmp_name1 = $_FILES["lmo"]["tmp_name"];
    $name1 = $_FILES["lmo"]["name"];
    $target1="../upload/doc2/".$name1;
    move_uploaded_file($tmp_name1, $target1); 
    
      $checkmail=mysqli_num_rows(mysqli_query($con, "SELECT * FROM club_org_reg WHERE email='$email' "));
if ($checkmail>0) {
  echo "<h4 style='color:red;'>Email Already Exist</h4>";
}
    
elseif ($org_name !== "" && $org_type !== "" && $town !== "" && $lga !== "" && $male_count !== "" && $female_count !== "" && $total_staff_count !== "" && $org_branches !== "" && $email !== "" && $org_obj !== "" && $religous !== "" && $meeting_day !== "" && $meeting_venue !== "" && $meeting_time !== "" && $meeting_duration !== "" && $sec_address !== "" && $name !== "" && $name1 !== "") {

  $random = substr(md5(mt_rand()), 0, 10);
    $date = date('Y-m-d');                           
  $query=mysqli_query($con, "INSERT INTO club_org_reg (id,organization_name,organization_type,town,lga,male_staff_no,female_staff_no,total_staffs,branches,branches_locations,is_it_religiousbody,aims,meeting_days,meeting_locations,meeting_time,meeting_duration,address_of_secretary,contact_phone_no,activities,name_of_patron,address_of_patron,phone_of_patron,copy_of_constitution,list_of_members_org,email,password,status,date_created) VALUES ('','$org_name','$org_type','$town','$lga','$male_count','$female_count','$total_staff_count','$org_branches','$other_branches','$religous','$org_obj','$meeting_day','$meeting_venue','$meeting_time','$meeting_duration','$sec_address','$sec_phone','$activities','$patron_name','$patron_address','$patron_phone','$name','$name1','$email','$random','0','$date') ");
if ($query == true) {
  $date = date("Y");
    $message= 'Your rigistration was successful see secret key below';
        $subject = "Login info";
        $htmlContent = '<html>
          <body style="background: #e4e2e2">
          <center><div style="width: 50%;border-radius: 5px 5px 5px 5px;height:60%">

          <div style="background: white;padding:10%;margin-top:25px">
           <div>
            <h5>'.$message.'</h5>
           </div>
          <h3 style="color: #1ab394;font-family: Open Sans, helvetica, arial, sans-serif;margin:3%">
            Your Password: '.$random.'
          </h3>
          <p style="padding:10px;line-height:200%"> </p>
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
echo "done";
  
}else{
  echo "Mysqli error posting";
}
  
}else{
  echo "<h4 style='color:blue;'>Unsuccessful Some empty inputs </span>";
  
}


?>