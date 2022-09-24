<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>

    <ol>
        <?php
            $filelist = scandir('./data');
            $i = 0;
            while ($i < count($filelist)) {
                if($filelist[$i] != '.') {
                    if($filelist[$i] != '..') {
                        echo "<li> <a href=\"index.php?id=$filelist[$i]\"> $filelist[$i] </a></li>\n";
                    }
                }
                $i += 1;
            }
        ?>
    </ol>

    <h2> 
        <?php 
        
            if(isset($_GET['id'])) {
                echo $_GET['id'];
            } else {
                echo 'Welcome'; 
            }

        ?> 
    </h2>
 
    <?php 

        if(isset($_GET['id'])) {
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "Hello, PHP";  
        }

    ?>

</body>
</html>
