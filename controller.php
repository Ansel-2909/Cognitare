<?php 

function base_url(){
	return "http://" . $_SERVER['SERVER_NAME']."/Cognitare";
}


if(isset($_GET['page'])){
	if($_GET['page']=="login"){
		if(isset($_SESSION['loggedIn']) == true){
			header("Location: ".base_url());
		}else{
			require ('login.php');
		}

	}else if($_GET['page']=="register"){
		if(isset($_SESSION['loggedIn']) == true){
			header("Location: ".base_url());
		}else{
			require ('register.php');
		}

	}else if($_GET['page']=="profile"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('profile.php');
		}else{
			header("Location: ".base_url());
		}

	}else if($_GET['page']=="home"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('home.php');
		}else{
			header("Location: ".base_url());
		}

	}else if($_GET['page']=="career"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('career.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="holland"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('holland.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="holland-result"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('holland-result.php');
		}else{
			header("Location: ".base_url());
		}
	}
	else if($_GET['page']=="about"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('about.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="feedbacks"){
		if(isset($_SESSION['loggedIn']) && $_SESSION['u_role'] == "admin"){
			require ('feedbacks.php');
		}else{
			header("Location: ".base_url());
		}
	}else{
		echo '404';
	}
}
?>