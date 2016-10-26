<?php

    $_POST['first'];
            $image = $_FILES["image"]["name"];
            $destination = $_FILES["image"]["tmp_name"];
            $file = time() . $image;
            $result = move_uploaded_file($destination, "uploads/" . $file);
 
?>