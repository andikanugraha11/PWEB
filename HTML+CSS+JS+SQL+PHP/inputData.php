<?php
require_once('dbconnect.php');

$name       = $_POST['nama'];
$email      = $_POST['email'];
$dateD      = $_POST['tanggal'];
$dateM      = $_POST['bulan'];
$dateY      = $_POST['tahun'];
$sex        = ($_POST['jk']=='pria'?1:0);
$experience = $_POST['pengalaman'];
$tech       = $_POST['tek'];

$time = $dateM.'-'.$dateD.'-'.$dateY;
$ymd = DateTime::createFromFormat('m-d-Y', $time)->format('Y-m-d');

$values  = mysql_real_escape_string(implode(',',$tech));

$sql = "INSERT INTO tech (name, email, birthday, sex, used_tech, experience) VALUES ('$name', '$email', '$ymd', '$sex', '$values', '$experience')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE html>";
    echo "<head>";
    echo "<title>Form submitted</title>";
    echo "<script type='text/javascript'>window.parent.location.reload()</script>";
    echo "</head>";
    echo "<body></body></html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>