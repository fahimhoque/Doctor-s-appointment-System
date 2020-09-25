<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'das');

	$sql = $conn->prepare("SELECT * FROM district WHERE district_name LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$districtResult[] = $row["district_name"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>