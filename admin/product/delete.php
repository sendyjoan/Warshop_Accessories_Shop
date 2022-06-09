<?php
// include database connection file
require("../../config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
if( deleteproduct($id) > 0 ) {
	echo "
		<script>
			alert('Data Product Berhasil Dihapus');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data Product Gagal Dihapus!');
			document.location.href = 'index.php';
		</script>
	";
}
 
// After delete redirect to Home, so that latest user list will be displayed.
?>