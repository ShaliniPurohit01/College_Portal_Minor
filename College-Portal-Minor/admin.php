<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=password], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:cyan;
}

input[type=reset]:hover {
    background-color:cyan;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

</style>


<form action="adminsave.php" method="post">
		<table border="2" align="center" height=45% width=45%>
			<tr  align="center">
				<td colspan="2">
					ADMIN
				</td>
			</tr>
			<tr align="center">
				<td>
					Enter admin name:
				</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr align="center">
				<td>
					Enter password:
				</td>
				<td>
					<input type="password" name="pw">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="LOGIN" >
			</tr>
			</table>
			
		</form>