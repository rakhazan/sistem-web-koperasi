<?php 

session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
    echo "<script>
        alert('You are not login yet, please login first !');
        document.location.href = '../../login.php';
        </script>";
    }

require '../../connection.php';

$id = htmlspecialchars($_POST['idJenis']);
$jenis = htmlspecialchars($_POST['jenis']);
$jml = htmlspecialchars($_POST['jumlah']);

$query = "insert into jenis_simpan values ('$id', '$jenis', '$jml')";
$insert = mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
	echo "<script>
            alert('Added Successfully');
            document.location.href = 'view.php';
            </script>";
} else {
	echo "<script>
            alert('Added Failed');
            document.location.href = 'view.php';
            </script>";
}
