<?php
$file_name=$_FILES['img']['name'];
$file_tmp=$_FILES['img']['tmp_name'];
move_uploaded_file($file_tmp,'photo/'.$file_name);
?>
jhfjftj
