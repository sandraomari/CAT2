<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>

<body align="center"> 
	
		<p>Register Student</p>
		<form action="/student" method="post">
			{{csrf_field()}}
			Admission Number:<input type="number" name="Admission_Number"><br><br>
			Full Name:<input type="text" name="Name"><br><br>
			Address:<input type="text" name="Address"><br><br>
			Date of Birth:<input type="date" name="DOB"><br><br>
			<input type="submit" name="Register"><br><br>
			@if ($errors->any())
		
			<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
    
    @endif
		</form>
		 <a href="/"><button>Home</button></a>
</body>
</html>