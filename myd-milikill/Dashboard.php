<?php
include_once "inc/session.php";
include_once "inc/dbc.php";

if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
     $checkquery=mysqli_query($con, "SELECT * FROM club_org_reg WHERE email='$email' ");
     $query=mysqli_num_rows($checkquery);
     $row=mysqli_fetch_array($checkquery);
   $update=mysqli_query($con, "UPDATE club_org_reg SET status=0 WHERE date_created<DATE_SUB(NOW(), INTERVAL 1 YEAR)  ");
     if($query > 0){ ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Dashboard - Ministry of Youth Development | Rivers State of Nigeria</title>
        <?php include_once('inc/metalinks.php'); ?>
    </head>
    <body>
        <?php include_once('inc/header.php'); ?>
        <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <!-- contact form -->
                    <div class="col-md-12 col-sm-12  col-xs-12">
                        <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Association Registration Dashboard</h5>
                            <?php
                                $clubquery=mysqli_query($con, "SELECT * FROM club_org_reg WHERE email='$email' ");
                                $row=mysqli_fetch_array($clubquery);
                            ?>
                            <div class="row">
                                <div class="col-md-7">
                                 <?php  
                                  if($row['status']== 0 && $row['amount'] < 5000){
                                    echo '
                                    <span>Inactive account please activate </span><br>
                                    <h6>Click on the button below to pay your annual charge</h6>
                                    <form  method="POST" enctype="multipart/form-data">
                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                    <input type="hidden" name="amount" value="5000" id="amount">
                                    <input type="hidden" name="email" id="email" value="'.$email.'">
                                    <button type="button" class="btn-medium btn-circle btn bg-greenish-blue text-white tz-text" onclick="payWithPaystack()">Click me</button>
                                    </form>';
                                } elseif($row['status'] == 1 && $row['amount'] >= 5000){
                                    echo '
                                    <div class="alert alert-success"><b>Well done!</b> Your account have been activated successfuly!.</div>';
                                 } ?>
                                </div>
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

<?php
     }elseif($query < 1){
       $query2=mysqli_num_rows(mysqli_query($con, "SELECT * FROM rivers_youth_registration WHERE email='$email' "));
       if($query2 > 0){ 

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Dashboard - Ministry of Youth Development | Rivers State of Nigeria</title>
        <?php include_once('inc/metalinks.php'); ?>
    </head>
    <body>
        <?php include_once('inc/header.php'); ?>
        <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <!-- contact form -->
                    <div class="col-md-12 col-sm-12  col-xs-12">
                        <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Dashboard</h5>
                            <?php
                            $youth=mysqli_query($con, "SELECT * FROM rivers_youth_registration WHERE email='$email' ");
                            $row=mysqli_fetch_array($youth);
                            ?>
                            <div class="row">
                                <div class="media">
                                  <a class="pull-left" href="#">
                                    <img class="media-object" src="images/userimg.png" alt="...">
                                  </a>
                                  <div class="media-body">
                                    <h4 class="media-heading">Welcome</h4>
                                     <span>Name: <?php echo $row['surname']." ".$row['other_names']; ?></span><br>
                                  
                                    <span>sex: <?php echo $row['sex']; ?></span>
                                  </div>
                                </div>
            
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

<?php
       }elseif($query2 < 1){
        $query3=mysqli_num_rows(mysqli_query($con, "SELECT * FROM skill_edu_form WHERE email='$email' "));
    if($query3 > 0){
 ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Dashboard - Ministry of Youth Development | Rivers State of Nigeria</title>
        <?php include_once('inc/metalinks.php'); ?>
    </head>
    <body>
        <?php include_once('inc/header.php'); ?>
        <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <!-- contact form -->
                    <div class="col-md-12 col-sm-12  col-xs-12">
                        <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Dashboard  </h5>
                            <?php
                            $youth=mysqli_query($con, "SELECT * FROM skill_edu_form WHERE email='$email' ");
                            $row=mysqli_fetch_array($youth);
                            ?>
                             <div class="row">
                                <div class="media">
                                  <a class="pull-left" href="#">
                                    <img class="media-object" src="images/userimg.png" alt="...">
                                  </a>
                                  <div class="media-body">
                                    <h4 class="media-heading">Welcome</h4>
                                     <span>Name: <?php echo $row['surname']." ".$row['middle_name']." ".$row['last_name']; ?></span><br>
                                  
                                    <span>sex: <?php echo $row['sex']; ?></span>
                                  </div>
                                </div>
            
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
<?php
    }elseif($query3 < 1){
     $query4=mysqli_num_rows(mysqli_query($con, "SELECT * FROM admin WHERE email='$email' "));

    if($query4 > 0){  
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Dashboard - Ministry of Youth Development | Rivers State of Nigeria</title>
        <?php include_once('inc/metalinks.php'); ?>
    </head>
    <body>
        <?php include_once('inc/header.php'); ?>
        <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb">
            <div class="container">
                <div class="row">
                    <!-- contact form -->
                    <div class="col-md-12 col-sm-12  col-xs-12">
                        <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                            <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom">Admin Dashboard  </h5>
                <div>
                    <h6>Rivers Youth Registration Form</h6>
                 <div class=" pull-right">
                     <form method="post" action="inc/export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-info" />  
                
                
                    </div>

                <table id="" class="table table-striped table-bordered">
                   <label> From Date: </label>

                         <input type="Date" name="from_date" id="from_date"  class="" style="width: 140px; ">
                    <label> To Date: </label>
                    
                         <input type="Date" name="to_date" id="to_date" class="" style="width: 140px; "><span> </span>
                         <input type="button" name="filter" onclick="admin()" id="filter" class="btn-medium btn-info" value="Filter" style="width: 100px;  ">
                   </form> 
                    <tr>
                        <th>Surname</th>
                        <th>Other Names</th>
                        <th>Sex</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Home Town</th>
                        <th>LGA</th>
                        <th>Contact Address</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>GSM</th>
                     <!--    <th>Name of Guardian</th>
                        <th>Address of Guardian</th>
                        <th>Relationship of Guardian</th> -->
                  </tr>
                <tbody id="combo">
                <?php
                $sortquery=mysqli_query($con, "SELECT * FROM rivers_youth_registration ORDER BY id desc LIMIT 20");
                while($row = mysqli_fetch_array($sortquery)){
                ?>
                  <tr>
                    <td><?php echo $row['surname']; ?></td>
                    <td><?php echo $row['other_names']; ?></td>
                    <td><?php echo $row['sex']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['home_town']; ?></td>
                    <td><?php echo $row['lga']; ?></td>
                    <td><?php echo $row['contact_address']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
             <!--   <td><?php echo $row['name_of_guardian']; ?></td>
                    <td><?php echo $row['address_of_guardian']; ?></td>
                    <td><?php echo $row['relationship_of_guardian']; ?></td> -->

                  </tr>
                <?php } ?>
                </tbody>
              </table>
                </div>  
                <hr>   
                         <div>
                    <h6>Skill Acquisition Form</h6>
                 <div class=" pull-right">
                     <form method="post" action="inc/export1.php" align="center">  
                     <input type="submit" name="export1" value="CSV Export" class="btn btn-info" />  
              
                
                    </div>

                <table id="" class="table table-striped table-bordered">
                  
                     <label> From Date: </label>

                         <input type="Date" name="from_date1" id="from_date1"  class="" style="width: 140px; ">
                    <label> To Date: </label>
                    
                         <input type="Date" name="to_date1" id="to_date1" class="" style="width: 140px; "><span> </span>
                         <input type="button" name="filter" onclick="admin1()" id="filter" class="btn-medium btn-info" value="Filter" style="width: 100px; ">
                      </form> 
                    <tr>
                        <th>Surname</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Nationality</th>
                        <th>State</th>
                        <th>LGA</th>
                        <th>GSM</th>
                        <th>Sex</th>
                        <th>Marital Status</th>
                       
                     <!--    <th>Name of Guardian</th>
                        <th>Address of Guardian</th>
                        <th>Relationship of Guardian</th> -->
                  </tr>
                <tbody id="combo1">
                <?php
                $sortquery=mysqli_query($con, "SELECT * FROM skill_edu_form ORDER BY id desc LIMIT 20");
                while($row = mysqli_fetch_array($sortquery)){
                ?>
                  <tr>
                    <td><?php echo $row['surname']; ?></td>
                    <td><?php echo $row['middle_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
                    <td><?php echo $row['state_of_origin']; ?></td>
                    <td><?php echo $row['lga']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['sex']; ?></td>
                    <td><?php echo $row['marital_status']; ?></td>
                   
             <!--        <td><?php echo $row['name_of_guardian']; ?></td>
                    <td><?php echo $row['address_of_guardian']; ?></td>
                    <td><?php echo $row['relationship_of_guardian']; ?></td> -->

                  </tr>
                <?php } ?>
                </tbody>
              </table>
                </div> 

                <hr>

                <div>
                    <h6>Association Registration</h6>
                 <div class=" pull-right">
                     <form method="post" action="inc/export2.php" align="center">  
                     <input type="submit" name="export2" value="CSV Export" class="btn btn-info" />  
                 
                
                    </div>

                <table id="" class="table table-striped table-bordered">
                    <label> From Date: </label>

                         <input type="Date" name="from_date2" id="from_date2"  class="" style="width: 140px; ">
                    <label> To Date: </label>
                    
                         <input type="Date" name="to_date2" id="to_date2" class="" style="width: 140px; "><span> </span>
                         <input type="button" name="filter" onclick="admin2()" id="filter" class="btn-medium btn-info" value="Filter" style="width: 100px; ">
                         </form>
                    <tr>
                        <th>Organisation Name</th>
                        <th>Organization Type</th>
                        <th>Town</th>
                        <th>LGA</th>
                        <th>Number of Male Staffs</th>
                        <th>Number of Female Staffs</th>
                     <!--    <th>Name of Guardian</th>
                        <th>Address of Guardian</th>
                        <th>Relationship of Guardian</th> -->
                  </tr>
                <tbody id="combo2">
                <?php
                $sortquery=mysqli_query($con, "SELECT * FROM club_org_reg ORDER BY id desc  LIMIT 20");
                while($row = mysqli_fetch_array($sortquery)){
                ?>
                  <tr>
                    <td><?php echo $row['organization_name']; ?></td>
                    <td><?php echo $row['organization_type']; ?></td>
                    <td><?php echo $row['town']; ?></td>
                    <td><?php echo $row['lga']; ?></td>
                    <td><?php echo $row['male_staff_no']; ?></td>
                    <td><?php echo $row['female_staff_no']; ?></td>
             <!--        <td><?php echo $row['name_of_guardian']; ?></td>
                    <td><?php echo $row['address_of_guardian']; ?></td>
                    <td><?php echo $row['relationship_of_guardian']; ?></td> -->
                  </tr>
                <?php } ?>
                </tbody>
              </table>
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

 <?php
     }else{
     echo 'No record found for this user';
    }
    }
    }
     }

    } else{
        header("location:login.php");
    }
 ?>
 <script>
     

  function admin(){
      var from_date = $('#from_date').val();  
      var to_date = $('#to_date').val();  
        if(from_date != '' && to_date != '')  
        {  
             $.ajax({  
                  url:"inc/ajax.php", 
                  method:"POST",  
                  data:{from_date:from_date, to_date:to_date},  
                  success:function(data)  
                  {  
                       $('#combo').html(data);  
                  }  
             });  
             
        }  
        else  
        {  
             alert("Please Select Date");  
        } 
  }
    function admin1(){
        var from_date = $('#from_date1').val();  
        var to_date = $('#to_date1').val();  
        if(from_date != '' && to_date != '')  
        {  
             $.ajax({  
                  url:"inc/ajax1.php",  
                  method:"POST",  
                  data:{from_date:from_date, to_date:to_date},  
                  success:function(data)  
                  {  
                       $('#combo1').html(data);  
                  }  
             });  
        }  
        else  
        {  
             alert("Please Select Date");  
        } 
  }
    function admin2(){
        var from_date = $('#from_date2').val();  
        var to_date = $('#to_date2').val();  
        if(from_date != '' && to_date != '')  
        {  
             $.ajax({  
                  url:"inc/ajax2.php",  
                  method:"POST",  
                  data:{from_date:from_date, to_date:to_date},  
                  success:function(data)  
                  {  
                       $('#combo2').html(data);  
                  }  
             });  
        }  
        else  
        {  
             alert("Please Select Date");  
        } 
  }

  function payWithPaystack(){
    var amount = $('#amount').val();
    var email = $('#email').val();
    amount = amount*100;
    var handler = PaystackPop.setup({
      key: 'pk_test_f89f1c1c4f6fe2f67018962197eb601ea61713af',
      amount: amount,
      email: email,
      // ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          $.ajax({
                url: "inc/file.php",
                method: "POST",
                data: {payment:response.reference,amount:amount,email:email},
                cache: false,
                success: function (data) {
                    if (data == 'done') {
                        window.location.href = 'dashboard.php';
                    } else {
                      alert(data)
                        //Do something here
                        alert('Error! Try Again.');
                        // window.location.reload();
                    }
                }
            });
      },
      onClose: function(){
          alert('window closed');
      }
    });

    handler.openIframe();
  }</script>