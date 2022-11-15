<?php
    $fn = $_REQUEST['dw'];
    header("Content-Type: application/octet-stream");

    header("Content-Disposition:attachment;filename=". basename($fn));

    readfile($fn);
?>