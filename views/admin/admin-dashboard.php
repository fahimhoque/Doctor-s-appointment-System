<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
} else {
    echo "You need to login first to view the dashboard";
    header('Location: admin-login');
}
require('config.php');
$sql = "SELECT * FROM doctor";
$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);



$sql_patient = "SELECT * FROM patient";
$result_patient = mysqli_query($conn, $sql_patient);

$count_patient = mysqli_num_rows($result_patient);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <!--Custom CSS Link-->
    <link rel="stylesheet" type="text/css" href="views/admin/style/admin-dashboard.css">

    <!--Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">


    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <!--Custom JS Link-->
    <script src="views/admin/scripts/patient-details.js"></script>
    <script src="views/admin/scripts/admin-dashboard.js"></script>
    

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <!--NAVBAR-->
    <div class="wrapper">
        <div class="sidebar">
            <h2>DAS Admin</h2>
            <ul>
                <!--Dashboard which will be active on Login-->
                
                <li><a href="admin-dashboard"><i class="fas fa-th"></i>Dashboard</a></li>
                

                <!--Load Patient Data On Click-->
                <li><a href="javascript:void(0);" id="load-patient-data"><i class="fas fa-user"></i>Patients</a></li>


                <!--Load Doctor's Data on Click-->
                <li><a href="javascript:void(0);" id="load-doctor-data"><i class="fas fa-medkit"></i>Doctors</a></li>



                <!--Load Ticket's Data on Click-->
                <li><a href="#" id="tickets-details-load-link"><i class="fas fa-tags"></i>Tickets</a></li>


                <!--Load Settings on Click-->
                <li><a href="#"><i class="fas fa-cog"></i>Settings</button></a></li>


                <!--Logout-->
                
                <li><a href="admin-logout"><i class="fas fa-cog"></i>LogOut</button></a></li>
                
                

            </ul>
        </div>
        
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day, <?php echo  $_SESSION['username'] . "!";?></div>
            

            <div id="show-patient-details">
                <h3>Patient Details</h3>
                <br>
                <input type="text" placeholder="Search by first name" name="find_patient" style="margin-left: 25px;">
                <button id="btn_search_patient" name="btn_search_patient"> Search</button>
                
                <br>
                <br>
                <table class="table table-stripped table-bordered text-center" id="patient-details-table">
                    <thead>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Comtact Number</th>
                        <th>Gender</th>
                        <th>Operations</th>
                        
                    </thead>

                    <tbody id="response-patient">
                        <?php  
                               if($count_patient > 0){
                                    while($rows_patient = mysqli_fetch_array($result_patient)){

                                        ?>
                                        <tr>
                                            <td><?php echo $rows_patient['id'];?> </td>
                                            <td><?php echo $rows_patient['f_name'];?></td>
                                            <td><?php echo $rows_patient['l_name'];?></td>
                                            <td><?php echo $rows_patient['email'];?></td>
                                            <td><?php echo $rows_patient['contact_number'];?></td>
                                            <td><?php echo $rows_patient['gender'];?></td>
                                            <!--<td><a href="fetch-doctor-details?id=<?php //echo $rows['id'];?>"> Options</a></td>-->
                                            <td><input class="edit_data" type="button" name="edit" value="Edit" id="<?php echo $rows['id'];?> "></td>
                                            
                                        </tr> 
                                        <?php
        

                                    }
                                }
                        ?>
                    </tbody>


                </table>
            </div>



            <div id="show-doctor-details">
                <h3>Doctor Details</h3>
                <br>
                <input type="text" placeholder="Search by first name" name="find_doctor" style="margin-left: 25px;">
                <button id="btn_search_doctor" name="btn_search_doctor"> Search</button>
                
                <br>
                <br>
                <table class="table table-stripped table-bordered text-center" id="doctor-details-table">
                    <thead>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Comtact Number</th>
                        <th>Gender</th>
                        <th>View</th>
                        <th>Edit</th>
                        
                    </thead>

                    <tbody id="response-doctor">
                        <?php  
                               if($count > 0){
                                    while($rows = mysqli_fetch_array($result)){

                                        ?>
                                        <tr>
                                            <td><?php echo $rows['id'];?> </td>
                                            <td><?php echo $rows['f_name'];?></td>
                                            <td><?php echo $rows['l_name'];?></td>
                                            <td><?php echo $rows['email'];?></td>
                                            <td><?php echo $rows['contact_number'];?></td>
                                            <td><?php echo $rows['gender'];?></td>
                                            <!--<td><a href="fetch-doctor-details?id=<?php //echo $rows['id'];?>"> Options</a></td>-->
                                            <td><input class="doctor_view_data" type="button" name="View" value="View" id="<?php echo $rows['id'];?> "></td>
                                            <td><input class="doctor_edit_data" type="button" name="View" value="Edit" id="<?php echo $rows['id'];?> "></td>
                                            
                                        </tr> 
                                        <?php
        

                                    }
                                }
                        ?> 
                       
                    </tbody>
                    

                </table>
            </div>


            <div id="dataModal" class="modal fade">  
                <div class="modal-dialog">  
                    <div class="modal-content">  
                        <div class="modal-header">  
                                <h4 class="modal-title">Doctor Details</h4>  
                        </div>  
                        <div class="modal-body" id="employee_detail">  
                            
                        </div>  
                        <div class="modal-footer">  
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                        </div>  
                    </div>  
                </div>  
            </div>





            <div id="add_data_Modal" class="modal fade">  
                <div class="modal-dialog">  
                    <div class="modal-content">  

                        <div class="modal-header"> 
                            <h4 class="modal-title">Update Doctor Details</h4>  
                        </div>  

                        <div class="modal-body"> 

                            <form method="post" id="update_form">  
                                <label>Enter First Name</label>  
                                <input type="text" name="f_name" id="f_name" class="form-control" />  
                                <br />  
                                <label>Enter Last Name</label>  
                                <input type="text" name="l_name" id="l_name" class="form-control" />  
                                <br />
                                <label>Enter Email</label>  
                                <input type="text" name="email" id="email" class="form-control" />  
                                <br />  
                                <label>Enter Contact Number</label>  
                                <input type="text" name="contact_number" id="contact_number" class="form-control" />  
                                <br />
                                <label>Select Gender</label>  
                                <select name="gender" id="gender" class="form-control">  
                                    <option value="Male">Male</option>  
                                    <option value="Female">Female</option>  
                                    <option value="Female">Rather not say</option>
                                </select>  
                                <br />    
                                <input type="hidden" name="doctor_id" id="doctor_id" />  
                                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                            </form>  
                            </div>  
                            <div class="modal-footer">  
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                            </div>  
                    </div>  
                </div>  
            </div> 

            
              
        </div>
    </div>











    
    <script type="text/javascript">


        $("#show-doctor-details").hide();
        $("#show-patient-details").hide();

        //For Patients
        $(document).ready(function(){

            $("#load-patient-data").click(function(){
                $("#show-patient-details").show();
                $("#show-doctor-details").hide();
              });

            $("#load-doctor-data").click(function(){
                

                $("#show-doctor-details").show();
                $("#show-patient-details").hide();
              
            });







            /*Edit Doctor Data*/
            $(document).on('click', '.doctor_edit_data', function(){  
            var doctor_id = $(this).attr("id");  
               $.ajax({  
                    url:"views/admin/fetch-full-doctor-details.php",  
                    method:"POST",  
                    data:{doctor_id:doctor_id},  
                    dataType:"json",  
                    success:function(data){  
                        $('#f_name').val(data.f_name); 
                        $('#l_name').val(data.l_name);
                        $('#email').val(data.email);
                        $('#contact_number').val(data.contact_number);
                        $('#gender').val(data.gender);    
                        $('#doctor_id').val(data.doctor_id);  
                        $('#insert').val("Update");  
                        $('#add_data_Modal').modal('show');  
                    }  
                });  
            });  
            $('#update_form').on("submit", function(event){  
                event.preventDefault();  
                if($('#f_name').val() == "")  
                {  
                    alert("First name is required");  
                }  
                else if($('#l_name').val() == "")  
                {  
                    alert("Last name is required");  
                }  
                else if($('#email').val() == '')  
                {  
                        alert("Email is required");  
                }
                else if($('#contact_number').val() == '')  
                {  
                        alert("Contact number is required");  
                }  
                else if($('#age').val() == '')  
                {  
                    alert("Age is required");  
                }  
                else  
                {  
                    $.ajax({  
                        url:"views/admin/update-doctor-data.php",  
                        method:"POST",  
                        data:$('#update_form').serialize(),  
                        beforeSend:function(){  
                                $('#insert').val("Inserting");  
                        },  
                        success:function(data){  
                            $('#insert_form')[0].reset();  
                            $('#add_data_Modal').modal('hide');  
                            $('#employee_table').html(data);  
                        }  
                    });  
                }  
            });











            /*View doctor details*/
            $(document).on('click', '.doctor_view_data', function(){  
                   var doctor_id = $(this).attr("id");  
                   if(doctor_id != '')  
                   {  
                        $.ajax({  
                             url:"views/admin/doctor-details.php",  
                             method:"POST",  
                             data:{doctor_id:doctor_id},  
                             success:function(data){  
                                  $('#employee_detail').html(data);  
                                  $('#dataModal').modal('show');  
                             }  
                        });  
                   }            
            });






        });

    </script>
    

</body>
</html>