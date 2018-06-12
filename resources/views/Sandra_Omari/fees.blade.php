<!DOCTYPE html>
<html>
<head>
	<title>Fees</title>
</head>

<body>
	
<a href="/viewall"><button>Search</button></a>
<form action="/fees" method="post">
	       {{csrf_field()}}
	<h2>Fees Payment Form</h2>
	<label>Admission Number</label>
	<input type="number" name="Admission_Number"><br><br>
	<label>Full Name:</label> 
	<input type="text" name="Name"><br><br>
	<label>Payment Date</label>
	<input type="date" name="Payment_date"><br><br>
	<label>Amount</label>
	<input type="number" name="Amount"><br><br>
	<input type="submit" name="Submit"><br><br>
		 
</form>
@if ($errors->any())
		<div>
			<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
    
		</div>
	</div>
    @endif
<a href="/"><button>Home</button></a>
</div>
</body>
</html>