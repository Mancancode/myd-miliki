 <?php 
   
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['comment'];
        $date = date("Y");
        $subject = "Contact us";
        $htmlContent = '<html>
          <body style="background: #e4e2e2">
          <center><div style="width: 50%;border-radius: 5px 5px 5px 5px;height:60%">

          <div style="background: white;padding:10%;margin-top:25px">
           <div>
            <h5>Talk to us</h5>
           </div>
          <h3 style="color: #1ab394;font-family: Open Sans, helvetica, arial, sans-serif;margin:3%">
            Name: '.$name.'
          </h3>
           <h3 style="color: #1ab394;font-family: Open Sans, helvetica, arial, sans-serif;margin:3%">
            Email: '.$email.' 
          </h3>
          <p style="padding:10px;line-height:200%"><b>Comment</b>: '.$message.'</p>
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
  
    $from ='Contact us<login@riversyouthministry.rv.gov.ng>';
			// Additional headers
			$headers = 'From: ' . $from. "\r\n";   
			$headers  .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 mail($email,$subject,$htmlContent,$headers);
 
 ?>