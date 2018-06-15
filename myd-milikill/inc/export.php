 <?php  
 include_once 'dbc.php';
      //export.php  
 if(isset($_POST["export"]))  
 {  
       $from=$_POST["from_date"];
       $to=$_POST["to_date"];
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'Surname', 'Other names', 'Sex', 'Date of Birth', 'Age', 'Home Town', 'LGA'));  
      $query = "SELECT * from rivers_youth_registration WHERE date_created BETWEEN '$from' AND '$to' ORDER BY id DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  