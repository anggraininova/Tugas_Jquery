<!DOCTYPE html>
<html>
<head>
<title>Form Tambah</title>
<script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="jquery.validate.pack.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#alumniForm").validate({
		messages: {
			email: {
				required: "E-mail harus diisi",
				email: "Masukkan E-mail yang valid"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo(element.parent("td"));
		}
	});
})
</script>
<style type="text/css">
* { font: 11px/20px Verdana, sans-serif; }
input { padding: 3px; border: 1px solid #999; }
input.error, select.error { border: 1px solid red; }
label.error { color:red; margin-left: 10px; }
td { padding: 5px; }
</style>
</head>
<body>
<form action="proses_tambah.php" id="alumniForm"  method="post">
	<table>
			<td>First Name</td>
			<td>
				<input name="first_name" class="required" title="First Name is required" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td>
				<input name="last_name" class="required" title="Last Name is required" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>
				<input name="email" id="email" class="required email" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>
				<input name="phone" class="required" title="Phone is required" size="40" type="text" />
			</td>
		</tr>
        <tr>
			<td>Address</td>
			<td>
				<input name="address" class="required" title="Address is required" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Tambah" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>