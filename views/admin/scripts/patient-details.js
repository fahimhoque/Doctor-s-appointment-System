<script type="text/javascript">
    $(document).ready(function(){
        $("#load-patient-data").click(function(){
            $.ajax({
                url: 'views/admin/patient-details.php', 
                type: 'POST',
                success: function(result){
                    $("#response").html(result);
                }
            });
        });
    });



        //Hide table on login
    $("#show-patient-details").hide();

    $(document).ready(function(){
            
        $("#load-patient-data").click(function(){
            $("#show-patient-details").show();
            });
    });


</script>