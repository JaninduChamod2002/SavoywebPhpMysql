<?php
	
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	$price = $_POST['price'];
	$cardno = $_POST['cardno'];
	$expdate = $_POST['expdate'];
    $ccv = $_POST['ccv'];
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'moviehall');
	if ($conn->connect_error) {
		die('Connection Failed: ' . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO payment ( start_time, end_time, price, cardno, expdate, ccv) VALUES ( ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $start_time, $end_time, $price, $cardno, $expdate, $ccv);
		$stmt->execute();
		echo "payment successfully submitted.";

		echo "<script> 
			window.location.replace(\"paymentview.php\");
		</script>";

		$stmt->close();
		$conn->close();
	}
?>