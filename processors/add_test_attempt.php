<?php
session_start();

require '../connection.php';


if(isset($_POST['q1']) && isset($_POST['q24'])){
	$r_score = 0;
	$i_score = 0;
	$a_score = 0;
	$s_score = 0;
	$e_score = 0;
	$c_score = 0;
	$s_user_id = $_SESSION['user_id'];
	foreach ($_POST as $key => $value) {
		switch ($value) {
			case 'R':
			$r_score++;
			break;
			case 'I':
			$i_score++;
			break;
			case 'A':
			$a_score++;
			break;
			case 'S':
			$s_score++;
			break;
			case 'E':
			$e_score++;
			break;
			case 'C':
			$c_score++;
			break;
			default:
			# do nothing...
			break;
		}
	}

	$sql = "INSERT INTO scores (s_realistic, s_investigative, s_artistic, s_social, s_enterprising, s_conventional, s_user_id, s_date) VALUES 
	('".$r_score."', '".$i_score."', '".$a_score."','".$s_score."','".$e_score."','".$c_score."',
	'".$s_user_id."', now())";

	if($con->query($sql)){
		updateUserTestAttempt();
		header('Location: ../controller.php?page=holland-result');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con	);
	}
	$con->close();

}if(isset($_POST[''])){
	header('Location: ../controller.php?page=home');
}

function updateUserTestAttempt(){
	require '../connection.php';

	$sql = "UPDATE user SET u_test_attempt	= '1' WHERE user_id = '".$_SESSION['user_id']."'";
	if($con->query($sql)){
		$_SESSION['u_test_attempt'] = 1;
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con	);
	}
	$con->close();
}

?>