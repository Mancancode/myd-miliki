<?php
include_once "dbc.php";
?>
	  <?php
	     if(isset($_POST["from_date"], $_POST["to_date"]))  
 { 
     
        $sortquery=mysqli_query($con, "SELECT * FROM club_org_reg WHERE  date_created BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."' ORDER BY id desc  ");
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
	  <!--   <td></td>
	    <td></td>
	    <td></td> -->

	  </tr>
	   <?php
	    } } ?>