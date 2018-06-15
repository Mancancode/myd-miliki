 <?php  
 include_once 'dbc.php';
      //export.php  
 if(isset($_POST["export1"]))  
 {  
        $from=$_POST["from_date"];
       $to=$_POST["to_date"];
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'Surname', 'Middle Name', 'Last Name', 'Nationality', 'State', 'LGA', 'GSM'));  
      $query = "SELECT * from skill_edu_form WHERE date_created BETWEEN '$from' AND '$to' ORDER BY id DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  