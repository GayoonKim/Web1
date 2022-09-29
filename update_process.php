<?php

$conn = mysqli_connect('localhost', 'root', 'asdf1234', 'opentutorials');

settype($_POST['id'], 'integer');
$filtered = array(
    'id'=>mysqli_real_escape_string($conn, $_POST['id']),
    'title'=>mysqli_real_escape_string($conn, $_POST['title']),
    'description'=>mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "
    UPDATE topic 
    SET
        title = '{$filtered['title']}',
        description = '{$filtered['description']}'
    WHERE
            id = {$filtered['id']}

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