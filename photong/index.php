<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
	
    <title> PANEL</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<script>
function myFunction(){
	alert('hello');
}
function check(){	
	var user=document.getElementById('user').value;
	var pass=document.getElementById('pass').value;
	if(user!='admin'){
		alert('ชื่อผู้ใช้ไม่ถูกต้อง');
	}
	else if(pass!='admin'){
		alert('รหัสผ่านไม่ถูกต้อง');
	}
	else{
		window.location='../photong/panel.php';
	}
}
</script>

</head>

<body>

<div class="container" style="margin-top:100px">
<div class="row">
<div class="col-sm-6">	
<div class="jumbotron" ">

	
		

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		
			<center><h2>PHOTONG PANEL</h2><br></center>
					
		
	</div>
</nav>
	<div class='login'>
		
		<form action='../ratchaphruek' method='post' onsubmit='check(); return false;'>
		<table class='sample'>
			<p>
				
				<input class="w3-input" placeholder="Enter Username" <input id='user' type='text' required></p>
			
			<p>
				
				<input class="w3-input" placeholder="Enter Password"<input id='pass' type='password' required></p>
			</tr>
		<button type="submit">SUBMIT</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	</div>
</div>
</div>
  </div>
</form>
	</div>
</div>
</body>
</html>
