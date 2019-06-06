<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-4" style="margin-left:510px;" >
  <img   src="images/food.jpg" alt="" style="height: 200px;
	width:200px; 
	margin-left
	">
</div>
<div class="col-4" style="margin-left:400px;">
<form method="POST" action="avto.php">
		<input  class="form-control" type="text" placeholder="email..." name="email"><br>
		<input  class="form-control" placeholder="Name and surname..." name="name"><br>
		<input  class="form-control" placeholder="Password..." name="psw"  type="password"><br>
		<button  name="button" class="btn btn-outline-dark " style="
		margin-left: 180px; 
		">
			Registration 
		</button>
</form>
</div>
<p style="margin-left:440px;"> 
		Или у вас уже есть аккаунт? <a href="vhod.php" style="color: black;">Вход</a>
</p>
</body>
</html>