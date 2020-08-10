<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashboard</title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <!--Custom CSS Link-->
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard.css">


    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>
    <!--NAVBAR-->
    <div class="wrapper">
        <div class="sidebar">
            <h2>Patient</h2>
            <ul>
                <!--Dashboard which will be active on Login-->
                
                <li><a href="patient-dashboard"><i class="fas fa-th"></i>Dashboard</a></li>
                

                <!--Load Patient Data On Click-->
                <li><a href="javascript:void(0);" id="load-patient-data"><i class="fas fa-user"></i>Profile</a></li>
                
                
                <!--Load Patient Data On Click
                <li><a href="javascript:void(0);" id="load-patient-data"><i class="fas fa-user"></i>Patients</a></li>-->

                 
                 
               <!-- Load Doctor's Data on Click
                <li><a href="javascript:void(0);" id="load-doctor-data"><i class="fas fa-medkit"></i>Doctors</a></li>-->



                <!--Load Ticket's Data on Click-->
                <li><a href="#" id="tickets-details-load-link"><i class="fas fa-tags"></i>Tickets</a></li>


                 <!--Load Patient Data On Click-->
                 <li><a href="javascript:void(0);" id="load-patient-data"><i class="fas fa-tint"></i>Blood</a></li>

                <!--Load Settings on Click-->
               <!-- <li><a href="#"><i class="fas fa-cog"></i>Settings</button></a></li>-->


                <!--Logout-->
                
                <li><a href="patient-logout"><i class="fas fa-cog"></i>LogOut</button></a></li>
                
                

            </ul>
        </div>
        
        <div class="main_content">
            <div class="header">Welcome!! Hope we can help you, <?php echo 'Patient' . "!";?></div>
            

             <!--<div id="show-patient-details">
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
                        <th>Contact Number</th>
                        <th>Gender</th>
                        <th>Operations</th>
                        
                    </thead>

                    <tbody id="response-patient">
                        
                    </tbody>


                </table>
            </div> -->



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
                        <th>Operations</th>
                        
                    </thead>

                    <tbody id="response-patient">
                        
                    </tbody>


                </table>
            </div>
        </div>
    </div>











    <!--JS-->
    <script type="text/javascript">
        //For Patients
        $(document).ready(function(){
            $("#load-patient-data").click(function(){
                $.ajax({
                    url: 'views/admin/patient-details.php', 
                    type: 'POST',
                    success: function(result){
                        $("#response-patient").html(result);
                    }
                });
            });
        });



        
        $("#show-patient-details").hide();

        $(document).ready(function(){
            
            $("#load-patient-data").click(function(){
                $("#show-patient-details").show();
             // $("#show-doctor-details").hide();
              });
        });


        //For Doctor
        // $(document).ready(function(){
        //     $("#load-doctor-data").click(function(){
        //         $.ajax({
        //             url: 'views/admin/doctor-details.php', 
        //             type: 'POST',
        //             success: function(result){
        //                 $("#response-doctor").html(result);
        //             }
        //         });
        //     });
        // });



        //Hide table on login
        $("#show-doctor-details").hide();

        $(document).ready(function(){
            
            $("#load-doctor-data").click(function(){
                $("#show-doctor-details").show();
                $("#show-patient-details").hide();
              });
        });
        


    </script>
    

</body>
</html>