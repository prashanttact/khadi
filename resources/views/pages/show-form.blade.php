
<form action="{{url('save-form')}}" method="POST">
{{ csrf_field() }}
<table>
<br><b>User Personal details</b> <hr><br>

<tr><td>Full Name :</td>
<td><input type="text" name="name"></td>
</tr>

<tr><td>Age :</td>
<td>
<select name="age">
	<option value="1">below 18</option>
	<option value="2">18-25</option>
	<option value="3">25-50</option>
	<option value="4">above 50</option>
</select>
</td>
</tr>

<tr>
<td>Gender : </td>
<td> 
<input type="radio" value="male" name="gender"> Male
<input type="radio" value="female" name="gender"> Female
</td>
</tr>

<tr><td>District</td>
	<td>
		<select name="district">
			<option value="1">Lucknow</option>
			<option value="2">Kanpur</option>
			<option value="3">Gonda</option>
			<option value="4">Banaras</option>
		</select>
	</td>
</tr>

<tr><td>Area</td>
	<td>
		<select name="area">
			<option value="1">Gomti Nagar</option>
			<option value="2">Kailash Puri</option>
			<option value="3">Alambagh</option>
			<option value="4">Aminabad</option>
		</select>
	</td>
</tr>

<tr><td>Cast</td>
	<td>
		<select name="cast">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
	</td>
</tr>

<tr><td>Annual Income</td>
	<td>
		<select name="annual_income">
			<option value="1">below 1lakh</option>
			<option value="2">1 lakh to 2 lakh</option>
			<option value="3">2 lakh to 5 lakh</option>
			<option value="4">above 5 lakh</option>
		</select>
	</td>
</tr>

<tr><td>Educational Qualification</td>
	<td><textarea name="educational_qualification"></textarea></td>
</tr>

<tr><td colspan=2><b>Professional Details</b><hr></td></tr>

<tr>
	<td>Your Employee Status</td>
	<td>
		<input type="radio" name="employee_status" value="y">Yes
		<input type="radio" name="employee_status" value="n">No
	<td>
</tr>

<tr>
	<td>Any Training Certificate</td>
	<td>
		<input type="radio" name="training_certificate" value="y">Yes
		<input type="radio" name="training_certificate" value="n">No
	<td>
</tr>

<tr>
	<td>Do You have adhaar card</td>
	<td>
		<input type="radio" name="adhaar_card" value="y">Yes
		<input type="radio" name="adhaar_card" value="n">No
	<td>
</tr>

<tr>
	<td>Traning Type</td>
	<td>
		<select name="training_type">
			<option value="1">Full time</option>
			<option value="2">Part time</option>
			<option value="3">Monthly</option>
			<option value="4">Hourly</option>
		</select>
	<td>
</tr>

<tr>
	<td>Loan Fund Requested</td>
	<td>
		<select name="loan_fund_requested">
			<option value="1">below 1lakh</option>
			<option value="2">1 lakh to 2 lakh</option>
			<option value="3">2 lakh to 5 lakh</option>
			<option value="4">above 5 lakh</option>
		</select>
	<td>
</tr>

<tr>
	<td>Industry</td>
	<td>
		<select name="industry">
			<option value="1">Small</option>
			<option value="2">Medium</option>
			<option value="3">Large</option>
			<option value="4">Huge</option>
		</select>
	<td>
</tr>

</table>
<input type="submit" name="submit">
</form>




