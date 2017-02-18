<?php

   if (isset($_FILES['file'])) {
   		$file = $_FILES['file'];
   		print_r('file');

   		/*//File Properties
   		$file_name = $file['name'];
   		$file_tmp = $file['tmp_name'];
   		$file_size = $file['size'];

   		//Work out the file extension
   		$file_ext = explode('.', $file_name);
   		$file_ext = strtolower(end($file_ext));

   		$file_name_new = uniqid('', true) . '.' , $file_ext;*/
   }

?>
