<!DOCTYPE html>
<html>
<head>
	<title>View Fees</title>
</head>
<body align="center">
<a href="/fees"><button>Back</button></a>
		<a href="/viewallfees"><button>ViewAll</button></a>
		<table align="center">
			<h2>Search Fees Payment record</h2>
			<form action="/search/fees" method="get">
				{{csrf_field()}}
				<label>Admission Number</label>
				<input type="number" name="Admission_Number">
				<input type="submit" name="search">

			</form>
			<tr>
				<th>Admission Number</th>
				<th>Name</th>
				<th>Payment Date</th>
				<th>Amount</th>
			</tr>
			@foreach($fee as $value)
			<tr>
			   <td>{{$value->Admission_Number}}</td>
			    <td>{{$value->Name}}</td>
			    <td>{{$value->Payment_Date}}</td>
			    <td>{{$value->Amount}}</td>
			</tr>
			@endforeach	
		 

		</table>
		
<p>The total amount of fees paid is: {{$sum}}</p>
</body>
</html>