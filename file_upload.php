<?php

   if (isset($_FILES['file'])) {
   		$file = $_FILES['file'];
   		print_r('file');

   		//File Properties
   		$file_name = $file['name'];
   		$file_tmp = $file['tmp_name'];
   		$file_size = $file['size'];
   		$file_error = $file['error'];

   		//Work out the file extension
   		$file_ext = explode('.', $file_name);
   		$file_ext = strtolower(end($file_ext));

   		$file_name_new = uniqid('', true) . '.' , $file_ext;

   		$allowed = array('mp4', 'mov', 'wmv');

   		if (in_array($file_ext, $allowed)) {
   			if ($file_error === 0) {

   				$file_name_new = uniqid('', true) . '.' . $file_ext;
   				$file_destination = 'uploads/' . $file_name_new;

   				if (move_uploaded_file($file_tmp, $file_destination)) {
   					echo $file_destination;
   				}

   			} else {
   				echo "Error";
   			}
   		} else {
   			echo "Error";
   		}
   }

?>
