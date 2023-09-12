<?php 



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-image: url("t.jpg");
            background-size: cover;
        }

        .container {
            width: 100%;
            max-width: 650px;
            background: rgba(0, 0, 0, 0.5);
            padding: 28px;
            margin: 0 28px;
            border-radius: 10px;
            box-shadow: inset -2px 2px 2px white;
        }

        .form-title {
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            padding-bottom: 6px;
            color: lightgreen;
            text-shadow: 2px 2px 2px black;
            border-bottom: 1px solid white; /* Corrected the typo here */
        }

        .usr_info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 0;
        }

        .usr_input:nth-child(2n) {
            justify-content: flex-end; /* Corrected the typo here */
        }

        .usr_input {
            display: flex;
            flex-wrap: wrap;
            width: 48%; /* Adjusted the width to make room for labels and inputs */
            padding-bottom: 15px;
        }

        .usr_input label {
            flex-basis: 30%; /* Added label width */
            text-align: right;
            margin-right: 10px;
            color: white;
        }

        .usr_input input {
            flex-grow: 1; /* Added input width */
            padding: 5px;
            border: none;
            border-radius: 5px;
        }

        .gender {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
        }

        .category {
            display: flex;
            margin-top: 10px;
        }

        .category label {
            margin-right: 10px;
        }

        .submit {
            text-align: center;
            margin-top: 20px;
        }

        .submit input {
            padding: 10px 20px;
            background-color: lightgreen;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  background-color: black; /* Set background color */
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  padding: 10px 20px;
}

nav ul li a {
  color: lightgreen;
  text-decoration: none;
  font-weight: bold;
}

nav ul li a:hover {
  color: white; /* Change color on hover */
  background-color: lightgreen; /* Change background color on hover */
}


a link{
color:white;
text-decoration: none;
background-color: none;
}
a:active{
	color:white;
	text-decoration:none;
	background-color:none;
}
a:hover{
	color:lightgreen;
	text-decoration: none;
	background-color :none;
}
a{
	color:white; 
}
    </style>
</head>
<body>


<nav>
    <ul>
        <li> <a href="Home.php"> Home </a> </li>
        <li> <a href="About us .php"> About us </a> </li>
        <li> <a href="Contact us.php"> Contact us </a> </li>
    </ul>
</nav>

<div class="container">
    <h1 class="form-title">Registration</h1>
    <form action="#">
        <div class="usr_info">
            <div class="usr_input">
                <label for="firstname">First name</label>
                <input type="text" id="first-name" name="firstname" placeholder="Enter your First name">
            </div>
            <div class="usr_input">
                <label for="lastname">Last Name</label>
                <input type="text" id="last-name" name="lastname" placeholder="Enter your Last name">
            </div>
            <div class="usr_input">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="usr_input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password">
            </div>
            <div class="usr_input">
                <label for="cp">Confirm Password</label>
                <input type="password" id="cp" name="cp" placeholder="Confirm your password">
            </div>
            <div class="usr_input">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your Email">
            </div>
        </div>
        <div class="gender">
            <span class="gender">Gender</span>
            <div class="category">
                <input type="radio" name="gender" id="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female">
                <label for="female">Female</label>
            </div>
        </div>
        <div class="submit">
            <input type="submit" value="Register">
        </div>
    </form>
</div>
</body>
</html>
