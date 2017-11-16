<?php
    require_once('dbconnect.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM tech WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<!DOCTYPE html>";
        echo "<head>";
        echo "<title>Form submitted</title>";
        echo "<script type='text/javascript'>window.parent.location.reload()</script>";
        echo "</head>";
        echo "<body></body></html>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
?>