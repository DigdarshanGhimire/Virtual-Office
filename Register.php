<?php
    session_start();

    // connect to the database


$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "zenith_reg";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";
}
else{
    echo " Connection Succeful";
}

    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username=$_POST['username'];
		$surname=$_POST[ 'Surname'];
		$firstname=$_POST[ 'Firstname'];
		$lastname=$_Post[ 'lastname'];
		$dob=$_POST ['dob'];
		$phnum=$_POST ['Phonenumber'];
		$pass=$_POST ['password'];
		$conp=$_POST ['Confirm passsword'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $male=$_POST['male'];
		$female=$_POST['female'];
    $temp = mysqli_query($db,"INSERT INTO zenith_reg (Username,surname,firstname,lastname,phonenumber,dob,password,confirm password,email,male,female) 
    VALUES ('$username','$email','$password')");
    
    if(!$temp){
        echo "error";
    }else{
        echo "Your registration is done.";
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>
	<nav>
		<li> <a href="Home.html"> Home </a></li>
		<li> <a href="#"> About Us </a></li>
		<li> <a href="#"> Contact Us</a></li>
	</nav>
	<div id="maincontainer">

		<div class="loginbox">
			<form action="welcome.php" method="post">
				<p> Username </p>
				<input type="text" placeholder="Enter username">
				<p> First Name </p>
				<input type="text" placeholder="Enter your Surname">
				<p> Middle Name </p>
				<input type="text" placeholder="Enter your Middle name">
				<p> Last Name </p>
				<input type="text" placeholder="Enter your Last name">
				<p> Password </p>
				<input type="password" placeholder="Enter password">
				<p>Confirm Password</p>
				<input type="password" placeholder="Confirm password">
		     	<p> D.O.B </p>
			    <input type="date" placeholder="Enter your date of birth">
			    <p>Phone number</p>
			    <input type="tell" placeholder="Enter your phone number">
			    <p>Enter Email address</p>
			    <input type="email" placeholder="Enter Email address">
			    <p> Gender </p>
				<input type="radio" name="gender">
				<input type="radio" name="gender" value="female" 
				<?php if (isset($gender) && $gender=="female") echo "checked"; ?>> Female
                <input type="radio" name="gender" value="male" 
                <?php if (isset($gender) && $gender=="male") echo "checked"; ?>> Male
				<input type="submit" onclick="submit()">

				<script>
					function submit(){
						window.location.href="welcome.php";
					}
				</script>
		    	<a href="Forgot_Password.html"></a>
		    	<a href="Login"></a>
		</form>
	</div>	
</div>
</body>
</html>
