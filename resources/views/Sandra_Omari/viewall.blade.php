<!DOCTYPE html>
<html>
<head>
	<title>View All Fees</title>
</head>
<body align="center">
<a href="/search/fees"><button>Back</button></a>
		<a href="/"><button>Home</button></a>
		<table align="center">
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