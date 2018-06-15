 <?php  
 include_once 'dbc.php';
      //export.php  
 if(isset($_POST["export2"]))  
 {  
        $from=$_POST["from_date"];
       $to=$_POST["to_date"];
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'Organisation Name', 'Organisation Type', 'Town', 'LGA', 'No of Male staff', 'No of Female Staff', 'Total Staffs'));  
      $query = "SELECT * from club_org_reg WHERE date_created BETWEEN '$from' AND '$to' ORDER BY id DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  