<?php

  if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $file_name = $file['name'];
   	$file_tmp = $file['tmp_name'];
   	$file_size = $file['size'];
   	$file_error = $file['error'];
    
    $file_name_new = uniqid('', true) . '.' , $file_ext;
    
    $file_destination = 'uploads/' . $file_name_new;

    if (move_uploaded_file($file_tmp, $file_destination)) {
      echo $file_destination;
    }
  }

?>
