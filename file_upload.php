<?php
echo phpinfo();
  if (isset($_FILES['video'])) {
    $file_video = $_FILES['video'];
    $file_name_video = $file_video['name'];
   	$file_tmp_video = $file_video['tmp_name'];
    
    //$file_ext = explode('.' , $file_name);
    
    //$file_name_new = uniqid('', true) . '.' . $file_ext;
    
    $file_destination_video = 'uploads/1/' . $file_name_video;

    if (move_uploaded_file($file_tmp, $file_destination_video)) {
      echo $file_destination_video;
    }
  }

if (isset($_FILES['accelerometer'])) {
    $file_accelerometer = $_FILES['accelerometer'];
    $file_name_acceleromter = $file_accelerometer['name'];
   	$file_tmp_accelerometer = $file_accelerometer['tmp_name'];
    
    //$file_ext = explode('.' , $file_name);
    
    //$file_name_new = uniqid('', true) . '.' . $file_ext;
    
    $file_destination_accelerometer = 'uploads/1/' . $file_name_accelerometer;

    if (move_uploaded_file($file_tmp_accelerometer, $file_destination_accelerometer)) {
      echo $file_destination_accelerometer;
    }
  }

?>
