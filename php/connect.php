<?

$host = 'lco.h.filess.io';
$db = 'project1_smoothdrew';
$user = 'project1_smoothdrew';
$port = '3307';
$passw = '1d75c12d1dcf8b7df207a04a0ca8c4a23ac740cb';

$conn = mysqli_connect($host, $user, $passw);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

?>
