<?php

$conn = mysqli_connect('localhost', 'root', 'asdf1234', 'opentutorials');

$title = $_POST['title'];
$description = $_POST['description'];

$sql = "
    INSERT INTO topic
    (title, description, created)
    VALUES(
        
            '{$title}',
            '{$description}',
            NOW()

        )

";

if ( !$result = mysqli_query($conn, $sql) )
{
    printf(mysqli_error($conn));
}
else
{
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
}

mysqli_close($conn);

?>