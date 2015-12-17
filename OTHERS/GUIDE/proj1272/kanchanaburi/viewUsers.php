<html>
	<head></head>
	<body>
		<table class="tbl-users">

			<th>USER ID</th>
			<th>EMAIL</th>
			<th>PASSWORD</th>
			<th>ACTIVATED</th>
			<th>ACTION</th>

		</table>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
		function deleteUser(userid){
				$.ajax({
					url: 'deleteUserGateway.php',
					success: function(data){
						alert("DELETED SUCCESSFULY!");
					}
				});
			}
	</script>
	<script>
		$('document').ready(function(){
			
			$.ajax({
				url: 'viewUsersGateway.php?filter=1',
				success: function(data){
					data = JSON.parse(data);

					for (var i = 0 ; i < data.length ; i++) {
				        var row = ('<tr/>');
				        row += "<td>"+data[i].userid+"</td>";
				        row += "<td>"+data[i].email+"</td>";
				        row += "<td>"+data[i].password+"</td>";
				        row += "<td>"+data[i].activated+"</td>";
				        row += "<td><button onclick='deleteUser("+data[i].userid+")'>X</button></td>";
				        row += "</tr>";
				        $(".tbl-users").append(row);
				    }
				}
			});

			
		});
		
	</script>
	</body>

</html>

