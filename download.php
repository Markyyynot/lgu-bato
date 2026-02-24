<?php
if(isset($_GET['file'])){

    $file = basename($_GET['file']);
    $filepath = "assets/eo/" . $file;

    if(file_exists($filepath)){

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.$file.'"');
        header('Content-Length: ' . filesize($filepath));
        header('Cache-Control: must-revalidate');
        header('Pragma: public');

        readfile($filepath);
        exit;
    } else {
        echo "File not found.";
    }
}
?>