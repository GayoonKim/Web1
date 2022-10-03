<?php

$conn = mysqli_connect("localhost", "root", "asdf1234", "opentutorials");

if ($conn == TRUE)
{
    echo "<p> Success </p>";
}
else
{
    echo "<p> Failure </p>";
}

$sql = "INSERT INTO topic (title, description, created) VALUES('MySQL', 'MySQL is ...', NOW())";

$result = mysqli_query($conn, $sql);

if ( $result == false ) {
    echo mysqli_error($conn);
}


?>