 <?php  
 if(isset($_POST["doctor_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "das");  
      $query = "SELECT * FROM doctor WHERE id = '".$_POST["doctor_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>ID</label></td>  
                     <td width="70%">'.$row["id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>First Name</label></td>  
                     <td width="70%">'.$row["f_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Last Name</label></td>  
                     <td width="70%">'.$row["l_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Contact Number</label></td>  
                     <td width="70%">'.$row["contact_number"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["gender"].'</td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 