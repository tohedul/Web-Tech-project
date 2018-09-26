<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style type="text/css">
		.main{
			display: block;
			width: 400px;
			height: 550px;
			margin-left: 35%;
			margin-top: 10%;
			background-color: #bbb;
		}
		.label{
			width: 200px;
		}
	</style>
</head>
<body>
	<h2 align="center"> SIGN UP Here</h2><hr>		
	<form action='../Controlar/v.php' method='post'>
		<fieldset class="main">
			<legend><h4> REGISTRATION </h4></legend>
			<table style="padding-top: 10px">
				<tr>
					<td class="label">Name</td>
					<td>:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Email</td>
					<td>:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">User Name</td>
					<td>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Password</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Confirm Password</td>
					<td>:</td>
					<td><input type="password" name="con_Password"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Gender</legend>
							<input type="radio" name="gen" value="Male">Male
							<input type="radio" name="gen" value="Female">Female
							<input type="radio" name="gen" value="Other">Other
						</fieldset>
					</td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Date of Birth</legend>
							<input type="text" name="date" placeholder="   dd" style="width: 50px"> /
							<input type="text" name="month" placeholder="   mm" style="width: 50px"> /
							<input type="text" name="year" placeholder="   yyyy" style="width: 50px"> 
						</fieldset>
					</td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan="3">
						<input type='submit'  value='submit' name='val_total'>
						<input type='submit'  value='reset'  name='val_total_re'>
					</td>
				</tr>

			</table>
			
		</fieldset>
	</form>
</body>
</html>