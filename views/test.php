if(isset($_POST['btn_submit']))
{

	$query_appointment = "INSERT INTO `appointment`
						(`appointment_date`, `appointment_time`, 
						`user_id`, `doctor_id`, `patient_fname`, `patient_lname`, 
						`patient_contact`, `patient_gender`, `patient_age`, `patient_bloodType`) 
						VALUES 
						($_POST['selected_date'],$_POST['selected_time'],$_POST['user_id'],
						$_POST['doctor_id'],$_POST['patient_fname'], $_POST['patient_lname'], 
						$_POST['patient_contact'],
						$_POST['patient_gender'],$_POST['patient_age'],$_POST['patient_bloodType'])";
	$result_appointment = mysqli_query($conn,$query_appointment);
}