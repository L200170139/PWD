
 <?php
	$conn= mysqli_connect('localhost', 'root', '','informatika2');
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM buku WHERE kode_buku = '$id'";
	mysqli_query($conn,$hapus);
	header('Location: buku.php');
?>
