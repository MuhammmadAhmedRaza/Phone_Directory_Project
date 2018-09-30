<?php 
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con , 'userregistration');
if(isset($_POST['signin']))
{
	$mail = $_POST['mail'];
	$pass = $_POST['password'];

	$sql = "select * from users where email = '".$mail."' AND password = '".$pass."'";

	// $result = mysqli_query($con , $s);

	if (mysqli_query($con, $sql)) {
		$result = mysqli_query($con, $sql);
		$num = mysqli_num_rows($result);
		if($num == 1){
			$row = mysqli_fetch_array($result);
			$_SESSION['success'] = "You have logged in ";
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_name'] = $row['name'];
			header('Location: /Phone_Directory_Project/list.php');
		}else{
			$_SESSION['fail'] = "Login failed";
			 header('Location: /Phone_Directory_Project/form.php');
		}
	}
	else {
	    	$_SESSION['fail'] = "Error: " . $sql . "" . mysqli_error($con);
	    	header('Location: /Phone_Directory_Project/form.php');
		               // echo 
		}
}
else if(isset($_POST['signup']))
{
	$name = $_POST['name'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$pass = $_POST['password'];
$cpass = $_POST['confirm_password'];

$s = "select * from users where name = '$name'";

$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
	if($num == 1){
		$_SESSION['fail'] = "Username already taken";
		 header('Location: /Phone_Directory_Project/form.php');
	}else{
		if($pass != $cpass)
		{
			$_SESSION['fail'] = "Password and confirm password not match";
	        header('Location: /Phone_Directory_Project/form.php');

		}else{
			$sql = "insert into users(name , email , contact , password , confirm_password) values('".$name."' , '".$mail."' , '".$contact."' , '".$pass."' , '".$cpass."')";
		// mysqli_query($con, $reg);
		if (mysqli_query($con, $sql)) {
					$_SESSION['success'] = "New record created successfully";
	               // echo "";
	               header('Location: /Phone_Directory_Project/form.php');
	        } else {
	        	$_SESSION['fail'] = "Error: " . $sql . "" . mysqli_error($con);
	        	header('Location: /Phone_Directory_Project/form.php');
	               // echo 
	        }
		}
	}
}
else if(isset($_POST['addcontact']))
{

	$company = $_POST['company'];
	$contact = $_POST['contactnumber'];
	$userid = $_POST['userid'];
		$sql = "insert into usercontact(phone , user_id , company) values('".$contact."' , '".$userid."' , '".$company."')";

	// mysqli_query($con, $reg);
	if (mysqli_query($con, $sql)) {
				$_SESSION['success'] = "New record created successfully";
               // echo "";
               header('Location: /Phone_Directory_Project/list.php');
               
    } else {
        	$_SESSION['fail'] = "Error: " . $sql . "" . mysqli_error($con);
        	header('Location: /Phone_Directory_Project/form1.php');

               // echo 
    }
}
?>