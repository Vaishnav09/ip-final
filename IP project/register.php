
<html>
	<head>
		<link rel="stylesheet" href="login.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
<h1 >Registration Form</h1>
<body>
<form action='signup.php' method='POST'>
	<table>
		<tr>
		<td style="color : red"> Full Name :
		</td>
		<td ><input type='text' name='name' value='' required>
		</td>
		</tr>
		<tr>
		<tr>
		<td style="color : red"> UserName : 
		</td>
				<td><input type='text' id='username' name='username' required>
		</td>
		</tr>
		<td style="color : red"> Password : 
		</td><td><input type='password' id='password' name='password' required>
		</td>
		</tr>
		<tr>
		<td style="color : red">Repeat Password : 
		</td><td><input type='password' id='repeatpwd' name='repeatpwd' onkeyup='check();' required>  <span id='message'></span>
		</td>
		</tr>
	</table><br>

	<input type='submit' style="margin-left:20px;width:200px;margin-left:80px;background-color : red;color:white" class="button"  name='submit' onclick="validation();"; value='register'><br>
	<div class="display">
	
	</div>
	<p style="color : red">Already have an account?<span><a style="color : blue" href="index2.php">Login</a></span></p>
</form>
<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('repeatpwd').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
	$('#submit').prop('disabled', true);
  }
}

//  function validation(){

// // 	var uname = document.getElementById("username").value
// // 	var pass = document.getElementById("password").value
// // 	var pass1 = document.getElementById("repeatpwd").value

// // 	if(uname=="" || pass=="" || pass1=="")
// // 	{
// // 		alert("Please add details.")
// // 		return false;
// 	}


// // }
</script>
</body>
</html>
