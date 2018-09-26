function educlick()
		{
			document.getElementById("insert").innerHTML=
			"
			<form method="post" action="insert.php">
			<table>
					
				<tr>
					<td>Name: </td>
					<td> <input type="text" name="name" placeholder="enter name"></td>
				</tr>
				<tr>
					<td>Detail: </td>
					<td> <textarea name="detail" placeholder="enter detail"></textarea> </td>
				</tr>
				<tr>
					<td>Image: </td>
					<td> <input type="file" name="img" placeholder="select image"></td>
				</tr>
				<tr>
					
					<td colspan="2" align="center"><input type="submit" name="submit" value="Insert" ></td>
				</tr>
			</table>
			</form>
				";
		}