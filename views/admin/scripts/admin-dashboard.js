$("#show-doctor-details").hide();
$("#show-patient-details").hide();


$(document).ready(function(){
    //For Patients
    $("#load-patient-data").click(function(){
        $.ajax({
            url: 'views/admin/patient-details.php', 
            type: 'POST',
            success: function(result){
                $("#response-patient").html(result);
            }
        });
    });

    $("#load-patient-data").click(function(){
        $("#show-patient-details").show();
        $("#show-doctor-details").hide();
    });

    //For doctor details
    $("#load-doctor-data").click(function(){
        $.ajax({
            url: 'views/admin/doctor-details.php', 
            type: 'POST',
            success: function(result){
                $("#response-doctor").html(result);
            }
        });

        $("#show-doctor-details").show();
        $("#show-patient-details").hide();
              
    });
                       
            

});

