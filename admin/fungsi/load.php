<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../../lib/sweet.js"></script>
</head>
<body>

	<script>
		swal({
	  		title: 'Oops...?',
	  		text: 'Silahkan Login Terlebih Dahulu!',
	  		showConfirmButton: false,
	  		type: 'warning',
	  		backdrop: 'rgba(123,0,0,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../');
 		} ,2000); 
 	</script>;
</body>
</html>